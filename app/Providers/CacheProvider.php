<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CacheProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
      $this->app->singleton("CacheDB","App\DBCache\CacheProdinfo");
      
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
