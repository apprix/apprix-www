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
    'content',
]);

add('writable_dirs', ['storage', 'bootstrap/cache']);

host('production')
    ->setHostname('62.238.10.202')
    ->setRemoteUser('deploy')
    ->setDeployPath('/var/www/apprix-www');

// Build assets locally and upload
task('deploy:assets', function () {
    upload('public/build/', '{{release_path}}/public/build/');
});

// Deploy steps
after('deploy:vendors', 'deploy:assets');
after('deploy:vendors', 'artisan:config:cache');
after('deploy:vendors', 'artisan:route:cache');

// Statamic-specific commands
task('statamic:warm', function () {
    run('cd {{release_path}} && php artisan statamic:stache:warm');
    run('cd {{release_path}} && php artisan statamic:search:update --all');
});

after('artisan:config:cache', 'statamic:warm');

// Auto-rollback on failure
after('deploy:failed', 'deploy:unlock');
