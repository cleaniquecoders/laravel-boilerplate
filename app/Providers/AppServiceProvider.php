<?php

namespace OSI\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * List of providers for development
     * @var array
     */
    protected $providers_dev = [];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootDevProviders();
    }

    /**
     * Boot Development Providers
     * @return void
     */
    private function bootDevProviders()
    {
        if ($this->app->environment() !== 'production') {
            foreach ($this->providers_dev as $provider) {
                $this->app->register($provider);
            }
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
