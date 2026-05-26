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

// Override Deployer's default deploy:update_code which uses git archive (strips .git).
// We do a real git clone so each release has a .git directory — required for
// Statamic Git to run git add/commit/push from the app root.
task('deploy:update_code', function () {
    $git = get('bin/git');
    $repo = get('repository');
    $branch = get('branch', 'main');
    // GitHub Actions checks out in detached HEAD state, so branch resolves to 'HEAD'
    if (empty($branch) || $branch === 'HEAD') {
        $branch = 'main';
    }
    run("export GIT_TERMINAL_PROMPT=0 GIT_SSH_COMMAND='ssh -o StrictHostKeyChecking=accept-new'; $git clone --depth=1 -b $branch $repo {{release_path}} 2>&1");
    run("$git -C {{release_path}} rev-parse HEAD > {{release_path}}/REVISION");
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
    // Give www-data rwX access to all paths Statamic CP may read/write:
    // .git/ (git operations), content/, users/, resources/, and public image dirs.
    foreach (['.git', 'content', 'users', 'resources', 'public/images', 'public/favicons', 'public/social_images'] as $dir) {
        run("test -e {{release_path}}/$dir && setfacl -R -m u:www-data:rwX {{release_path}}/$dir && setfacl -R -d -m u:www-data:rwX {{release_path}}/$dir || true");
    }
});

after('deploy:update_code', 'deploy:git-auth-setup');

// Ensure www-data can write to shared upload dirs (public/assets, public/files).
// These are created once by deploy:shared and owned by deploy, so ACL must be
// set here (as deploy) rather than in deploy:git-auth-setup.
task('deploy:shared-permissions', function () {
    foreach (['public/assets', 'public/files'] as $dir) {
        run("setfacl -m u:www-data:rwx {{deploy_path}}/shared/$dir");
        run("setfacl -d -m u:www-data:rwx {{deploy_path}}/shared/$dir");
    }
});

after('deploy:shared', 'deploy:shared-permissions');

// Statamic-specific commands
task('statamic:warm', function () {
    run('cd {{release_path}} && php artisan statamic:stache:warm');
    run('cd {{release_path}} && php artisan statamic:search:update --all');
});

after('artisan:config:cache', 'statamic:warm');

// Auto-rollback on failure
after('deploy:failed', 'deploy:unlock');
