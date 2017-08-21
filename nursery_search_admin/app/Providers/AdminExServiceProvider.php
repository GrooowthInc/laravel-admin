<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;

class AdminExServiceProvider extends \Encore\Admin\Providers\AdminServiceProvider
{
    protected $routeMiddleware = [
        'admin.auth' => \App\LaravelAdmin\Middleware\Authenticate::class,
        'admin.pjax' => \Encore\Admin\Middleware\PjaxMiddleware::class,
        'admin.log' => \Encore\Admin\Middleware\OperationLog::class,
        'admin.permission' => \Encore\Admin\Middleware\PermissionMiddleware::class,
        'admin.bootstrap' => \Encore\Admin\Middleware\BootstrapMiddleware::class,
    ];

    public function register()
    {
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();

            $loader->alias('Admin', \App\LaravelAdmin\Facades\Admin::class);

            if (is_null(config('auth.guards.admin'))) {
                $this->setupAuth();
            }
        });

        $this->registerRouteMiddleware();

        $this->commands($this->commands);
    }
}