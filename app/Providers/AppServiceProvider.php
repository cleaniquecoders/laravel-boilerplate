<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->bootProviders();
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }

    /**
     * Boot Providers Based On Environments.
     */
    private function bootProviders()
    {
        $providers = Collection::make(config('providers.' . $this->app->environment()));

        $providers->each(function ($provider) {
            $this->app->register($provider);
        });
    }
}
