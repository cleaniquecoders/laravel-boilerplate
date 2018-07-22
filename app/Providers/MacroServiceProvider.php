<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        \App\Macros\Http\Response::registerMacros();
        \App\Macros\Models\Model::registerMacros();
        \App\Macros\Routing\Breadcrumb::registerMacros();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // \App\Macros\Routing\Route::registerMacros();
    }
}
