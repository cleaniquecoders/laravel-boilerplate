<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
        \App\Blade\Directives\Icon::register();
    }

    /**
     * Register services.
     */
    public function register()
    {
    }
}
