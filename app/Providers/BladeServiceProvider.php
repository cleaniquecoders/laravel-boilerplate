<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        \App\Blade\Directives\Icon::register();

        // @todo to figure out, how to pass data to the custom component
        Blade::component('components.cards.figure', 'figure');
    }

    /**
     * Register services.
     */
    public function register()
    {
    }
}
