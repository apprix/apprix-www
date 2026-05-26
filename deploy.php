<?php

namespace Deployer;

require 'recipe/laravel.php';

set('application', 'apprix-www');
set('repository', 'git@github.com:apprix/apprix-www.git');
set('keep_releases', 5);

// Shared files and dirs (persist across deploys)
add('shared_files', ['.env', 'database/database.sqlite']);
add('shared_dirs', [
    'storage',
    'public/assets',
    'public/files',
    'content',        // CP-managed content persists across deploys
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

// Ensure www-data can write to shared dirs (setfacl on writable_dirs
// only touches the top-level dir, not existing files inside it)
task('deploy:content-permissions', function () {
    foreach (['content', 'public/files', 'public/assets'] as $dir) {
        $path = '{{deploy_path}}/shared/' . $dir;
        // Only set ACL on deploy-owned files (www-data-owned files are already writable by www-data)
        run("find $path -user deploy -exec setfacl -m u:www-data:rwX {} +");
        // Set default ACL on all directories so new files inherit correct permissions
        run("find $path -type d -exec setfacl -d -m u:www-data:rwX {} +");
    }
});

after('deploy:writable', 'deploy:content-permissions');

// Statamic-specific commands
task('statamic:warm', function () {
    run('cd {{release_path}} && php artisan statamic:stache:warm');
    run('cd {{release_path}} && php artisan statamic:search:update --all');
});

after('artisan:config:cache', 'statamic:warm');

// Auto-rollback on failure
after('deploy:failed', 'deploy:unlock');
