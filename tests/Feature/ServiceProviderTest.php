<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    /** @test */
    public function it_has_cleanique_coders_packages()
    {
        $config    = config('app.providers');
        $providers = [
            \CleaniqueCoders\Blueprint\Macro\BlueprintMacroServiceProvider::class,
            \CleaniqueCoders\Profile\ProfileServiceProvider::class,
            \CleaniqueCoders\ArtisanMakers\ArtisanMakersServiceProvider::class,
        ];
        foreach ($providers as $provider) {
            $this->assertTrue(in_array($provider, $config));
        }
    }

    /** @test */
    public function it_has_spatie_packages()
    {
        $config    = config('app.providers');
        $providers = [
            \Spatie\Permission\PermissionServiceProvider::class,
            \Spatie\Analytics\AnalyticsServiceProvider::class,
            \Spatie\Menu\Laravel\MenuServiceProvider::class,
            \Spatie\GoogleCalendar\GoogleCalendarServiceProvider::class,
            \Spatie\Html\HtmlServiceProvider::class,
        ];
        foreach ($providers as $provider) {
            $this->assertTrue(in_array($provider, $config));
        }
    }

    /** @test */
    public function it_has_other_packages()
    {
        $config    = config('app.providers');
        $providers = [
            \UxWeb\SweetAlert\SweetAlertServiceProvider::class,
        ];
        foreach ($providers as $provider) {
            $this->assertTrue(in_array($provider, $config));
        }
    }
}
