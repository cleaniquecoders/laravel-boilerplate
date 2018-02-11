<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootProviders();
    }

    /**
     * Boot Providers Based On Environments.
     *
     * @return void
     */
    private function bootProviders()
    {
        $providers = Collection::make(config('providers.' . $this->app->environment()));

        $providers->each(function ($provider) {
            $this->app->register($provider);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
