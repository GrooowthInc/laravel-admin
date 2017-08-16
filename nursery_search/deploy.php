<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuration

set('repository', 'http://deploy:gri.140901@gitlab.grooowth.co.jp/benesse/nursery_search.git');
set('git_tty', true); // [Optional] Allocate tty for git on first deployment
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);


// Hosts

host('nursery.benesse.demo.grooowth.co.jp')
    ->stage('staging')
    ->user('deploy')
    ->identityFile('~/.ssh/gxp.deploy/id_rsa')
    ->set('deploy_path', '/home/deploy/nursery.benesse.demo.grooowth.co.jp');
    
// Tasks
task('change_cwd', function () {
  $subdir = get('release_path') . DIRECTORY_SEPARATOR . 'nursery_search';
  set('release_path', $subdir);
  run('cd {{release_path}}');
});
after('deploy:update_code', 'change_cwd');

task('update_env', function(){
   run('mv .env.{{stage}} .env');
});
after('change_cwd', 'update_env');


desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
