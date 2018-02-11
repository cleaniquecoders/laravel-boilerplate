<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Observers\Kernel::make()->observes();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
