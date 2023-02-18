<?php
namespace Uaibo\Launchpad;

use Illuminate\Support\ServiceProvider;

class LaunchpadServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // routes
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // views
        $this->loadViewsFrom(__DIR__.'/views', 'launchpad');

        // migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        //configs
        $this->mergeConfigFrom(
            __DIR__.'/config/launchpad.php',
            'launchpad'
        );


        $this->publishes([
            __DIR__.'/config/launchpad.php' =>  config_path('launchpad.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/uaibo/launchpad'),
        ], 'assets');

        $this->publishes([
            __DIR__.'/views' => resource_path('vendor/uaibo/launchpad/views'),
        ], 'views');

    }

    public function register()
    {
        
    }
}