<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * @todo To create custom Blade Directives using Blade::component
 */
class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot()
    {
        \App\Blade\Components::make()->register();
        \App\Blade\Directives::make()->register();
        \App\Blade\Includes::make()->register();
    }

    /**
     * Register services.
     */
    public function register()
    {
    }
}
