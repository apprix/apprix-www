<?php

namespace Deployer;

require 'recipe/laravel.php';

set('application', 'apprix-www');
set('repository', 'git@github.com:apprix/apprix-www.git');
set('keep_releases', 5);

// Shared files and dirs (persist across deploys)
// NOTE: content/ is intentionally NOT shared — it lives in git and is deployed
// with each release. Statamic Git commits CP changes back to the repo.
add('shared_files', ['.env', 'database/database.sqlite']);
add('shared_dirs', [
    'storage',
    'public/assets',
    'public/files',
]);

add('writable_dirs', ['storage', 'bootstrap/cache', 'content']);

// Override Deployer's default deploy:update_code.
// Instead of doing a git clone on the server (which requires server→GitHub SSH and can
// cause SSH mux timeouts on slow clones), we upload the code directly from the CI runner.
// The runner already has the repo checked out (including .git) by actions/checkout.
// After upload we switch the git remote from HTTPS (runner default) to SSH so that
// Statamic Git integration can push content commits back to GitHub from the server.
task('deploy:update_code', function () {
    $repo = get('repository'); // git@github.com:apprix/apprix-www.git

    // Upload the checked-out code from the CI runner to the release directory.
    // Exclude build artifacts and dependencies — those are handled by later tasks.
    upload('./', '{{release_path}}/', [
        'options' => [
            '--exclude=node_modules',
            '--exclude=vendor',
            '--exclude=public/build',
        ],
    ]);

    // actions/checkout sets the remote URL to HTTPS with a temporary token.
    // Switch to SSH so Statamic Git (via git-wrapper.sh) can push to GitHub.
    run("/usr/bin/git -C {{release_path}} remote set-url origin $repo");
    // Remove the HTTPS auth header injected by actions/checkout — not valid on server.
    run("/usr/bin/git -C {{release_path}} config --unset http.https://github.com/.extraheader 2>/dev/null || true");
    run("/usr/bin/git -C {{release_path}} rev-parse HEAD > {{release_path}}/REVISION");
});

host('production')
    ->setHostname('62.238.10.202')
    ->setRemoteUser('deploy')
    ->setDeployPath('/var/www/apprix-www');

// Build assets locally and upload
task('deploy:assets', function () {
    upload('public/build/', '{{release_path}}/public/build/');
});

// Sync repo assets (images, videos) into shared public/assets
task('deploy:sync-assets', function () {
    upload('public/assets/', '{{deploy_path}}/shared/public/assets/');
});

// Deploy steps
after('deploy:vendors', 'deploy:assets');
after('deploy:vendors', 'deploy:sync-assets');
after('deploy:vendors', 'artisan:config:cache');
after('deploy:vendors', 'artisan:route:cache');

// Configure git identity in each release for Statamic Git commits.
// Authentication (deploy key + safe.directory) is handled by the git wrapper
// script at shared/git-wrapper.sh, referenced via STATAMIC_GIT_BINARY in .env.
task('deploy:git-auth-setup', function () {
    run("git -C {{release_path}} config user.email 'statamic@apprix.fi'");
    run("git -C {{release_path}} config user.name 'Statamic Bot'");
    // core.sharedRepository=all makes git create objects with 0666/0777 permissions
    // so any user (including deploy) can delete them during cleanup, even if www-data created them.
    run("git -C {{release_path}} config core.sharedRepository all");
    // Give www-data rwX access to all paths Statamic CP may read/write:
    // .git/ (git operations), content/, users/, resources/, and public image dirs.
    foreach (['.git', 'content', 'users', 'resources', 'public/images', 'public/favicons', 'public/social_images'] as $dir) {
        run("test -e {{release_path}}/$dir && setfacl -R -m u:www-data:rwX,u:deploy:rwX {{release_path}}/$dir && setfacl -R -d -m u:www-data:rwX,u:deploy:rwX {{release_path}}/$dir || true");
    }
});

after('deploy:update_code', 'deploy:git-auth-setup');

// Ensure both www-data AND deploy can write to shared upload dirs (public/assets,
// public/files). www-data writes CP/SFTP uploads; deploy must also be able to write
// (e.g. Statamic 6 creates asset .meta dirs during stache warm / search update).
// The default (-d) ACL makes every newly created entry inheritable-writable by both,
// so future CP uploads don't reintroduce the permission gap. Existing www-data-owned
// subdirs that predate this default must be fixed once as root (deploy cannot setfacl
// files it doesn't own).
task('deploy:shared-permissions', function () {
    foreach (['public/assets', 'public/files'] as $dir) {
        run("setfacl -m u:www-data:rwX,u:deploy:rwX {{deploy_path}}/shared/$dir");
        run("setfacl -d -m u:www-data:rwX,u:deploy:rwX {{deploy_path}}/shared/$dir");
    }
});

after('deploy:shared', 'deploy:shared-permissions');

// Statamic-specific commands
task('statamic:warm', function () {
    run('cd {{release_path}} && php artisan statamic:stache:warm');
    run('cd {{release_path}} && php artisan statamic:search:update --all');
});

after('artisan:config:cache', 'statamic:warm');

// Clear the static page cache once the new release is live. Content edits
// self-invalidate the static cache, but template/code changes do NOT — without
// this, code deploys keep serving stale cached HTML until manually cleared.
task('statamic:static-clear', function () {
    run('cd {{deploy_path}}/current && php artisan statamic:static:clear');
});
after('deploy:symlink', 'statamic:static-clear');


// Override cleanup to not abort the deploy on permission errors.
// Old releases may contain www-data-owned .git/objects (created by Statamic Git)
// that the deploy user cannot delete. We warn but continue — those releases
// will be retried on the next deploy once core.sharedRepository=all takes effect.
task('deploy:cleanup', function () {
    $releases = get('releases_list');
    $keep = get('keep_releases');

    while (count($releases) > $keep) {
        $release = array_pop($releases);
        $releasePath = get('deploy_path') . '/releases/' . $release;
        run("rm -rf $releasePath; exit 0");
    }

    run("cd {{deploy_path}} && if [ -e release ]; then rm release; fi");
    run("cd {{deploy_path}} && if [ -e current ] && [ ! -L current ]; then rm -rf current; fi");
})->desc('Cleaning up old releases');

// Auto-rollback on failure
after('deploy:failed', 'deploy:unlock');
