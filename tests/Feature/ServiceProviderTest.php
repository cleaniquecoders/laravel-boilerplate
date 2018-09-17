<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function it_has_app_service_provider()
    {
        $config    = config('app.providers');
        $providers = [
            \App\Providers\MacroServiceProvider::class,
            \App\Providers\ObserverServiceProvider::class,
        ];
        foreach ($providers as $provider) {
            $this->assertTrue(in_array($provider, $config));
        }
    }
}
