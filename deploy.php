<?php

require 'recipe/laravel.php';

/**
 * Your tasks
 */
task('deploy:start', function () {
    cd('~');
    run("if [ ! -d {{deploy_path}} ]; then mkdir -p {{deploy_path}}; fi");
    cd('{{deploy_path}}');
})->setPrivate();

before('deploy', 'deploy:start');

/**
 * Set parameters
 */
set('repository', 'git@bitbucket.org:your-org/your-project.git');
set('keep_releases', 5);

/**
 * Servers
 */
server('dev-svr', '192.168.11.11', 22)
        ->user('deployer')
        //->identityFile('./key/id_rsa.pub', './key/id_rsa', 'passphrase')
        ->forwardAgent()
        ->stage(['dev'])
        ->env('deploy_path', '/var/www/your-app')
        ->env('branch', 'master')
;
