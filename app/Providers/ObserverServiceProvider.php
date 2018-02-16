<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        \App\Observers\Kernel::make()->observes();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
