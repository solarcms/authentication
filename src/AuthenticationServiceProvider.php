<?php
/**
 * Created by PhpStorm.
 * User: n0m4dz
 * Date: 11/19/15
 * Time: 12:22 PM
 */

namespace Solarcms\Authentication;

use Illuminate\Support\ServiceProvider as ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{


    public function boot()
    {
        // Route
        include __DIR__ . DIRECTORY_SEPARATOR .'routes.php';

        // For publishing assets
        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . 'Assets'. DIRECTORY_SEPARATOR . 'dist' => public_path('assets'. DIRECTORY_SEPARATOR .'auth'),
        ], 'auth');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // View
        $this->loadViewsFrom(__DIR__ . DIRECTORY_SEPARATOR . 'Views', 'Authentication');

        $this->app['Authentication'] = $this->app->share(function ($app) {
            return new Authentication;
        });
    }
}

?>