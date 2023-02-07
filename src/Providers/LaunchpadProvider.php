<?php
namespace Uaibo\Launchpad\Providers;

use Illuminate\Support\ServiceProvider;

class LaunchpadProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../views', 'launchpad');

        $this->publishes(
            [
                __DIR__.'/config/launchpad.php' =>  config_path('launchpad.php'),
            ],
            'config'
        );

    }
}
