<?php

namespace Deployer;

require 'recipe/laravel.php';

set('application', 'apprix-www');
set('repository', 'git@github.com:apprix/apprix-www.git');
set('keep_releases', 5);

// Keep .git in each release so Statamic Git integration can commit and push
set('git_cache', false);

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

// Configure git in each release for Statamic Git integration.
// Uses a dedicated SSH deploy key (stored in shared/) so www-data can push
// without being tied to any personal GitHub account.
// The private key must be placed at shared/.statamic-git-deploy-key on the server
// and the corresponding public key added to GitHub as a deploy key with write access.
task('deploy:git-auth-setup', function () {
    $keyPath = '{{deploy_path}}/shared/.statamic-git-deploy-key';
    $keyExists = test("[ -f $keyPath ]");
    if (!$keyExists) {
        writeln('<comment>Warning: deploy key not found at ' . $keyPath . ' — Statamic Git push will not work.</comment>');
        return;
    }
    // Tell git to use the deploy key when connecting to GitHub
    run("git -C {{release_path}} config core.sshCommand 'ssh -i $keyPath -o StrictHostKeyChecking=no -o IdentitiesOnly=yes'");
    run("git -C {{release_path}} config user.email 'statamic@apprix.fi'");
    run("git -C {{release_path}} config user.name 'Statamic Bot'");
    // Give www-data access to .git/ so it can run git add/commit/push
    run("setfacl -R -m u:www-data:rwX {{release_path}}/.git");
    run("setfacl -R -d -m u:www-data:rwX {{release_path}}/.git");
});

after('deploy:update_code', 'deploy:git-auth-setup');

// Statamic-specific commands
task('statamic:warm', function () {
    run('cd {{release_path}} && php artisan statamic:stache:warm');
    run('cd {{release_path}} && php artisan statamic:search:update --all');
});

after('artisan:config:cache', 'statamic:warm');

// Auto-rollback on failure
after('deploy:failed', 'deploy:unlock');
