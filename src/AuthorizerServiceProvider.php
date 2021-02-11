<?php
namespace Fileelemenation\Wrapper;

use Illuminate\Support\ServiceProvider;

class AuthorizerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('Fileelemenation\Wrapper\AuthorizerController');
    }
}
