<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CookcardProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("Cookiec", "App\CookCard\Cardshop");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
