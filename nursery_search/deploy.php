<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'vendor/deployer/recipes/npm.php';

// Configuration

set('repository', 'http://deploy:gri.140901@gitlab.grooowth.co.jp/benesse/nursery_search.git');
set('branch', 'develop');
set('git_tty', true); // [Optional] Allocate tty for git on first deployment
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);


// Hosts

host('nursery.benesse.demo.grooowth.co.jp')
    ->stage('staging')
    ->user('deploy')
    ->identityFile('/root/.ssh/gri.common.key')
    ->set('deploy_path', '/home/deploy/nursery.benesse.demo.grooowth.co.jp');
    
// Tasks
task('change_cwd', function () {
  $subdir = get('release_path') . DIRECTORY_SEPARATOR . 'nursery_search';
  set('release_path', $subdir);
  run('cd {{release_path}}');
});
after('deploy:update_code', 'change_cwd');

task('update_env', function(){
   run('mv {{release_path}}/.env.{{stage}} {{release_path}}/.env');
});
after('change_cwd', 'update_env');

task('npm:install2', function () {
  run('source ~/.bash_profile; cd {{release_path}}; npm install');
});
after('deploy:update_code', 'npm:install2');

task('assets:generate', function(){
  cd('{{release_path}}');
  run('source ~/.bash_profile;npm run production');
});
after('npm:install2','assets:generate');



// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
