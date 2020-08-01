<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class AdminPoliciesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       return $this->app->singleton('Policies','App\Policies\AdminPolicy');
    
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
