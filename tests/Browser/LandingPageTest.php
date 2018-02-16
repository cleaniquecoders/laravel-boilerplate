<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LandingPageTest extends DuskTestCase
{
    /** @test */
    public function can_see_landing_page()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->assertSee('Laravel Boilerplate')
                    ->assertSee('Ready with Bootstrap 4, Font Awesome 5')
                    ->assertSeeLink('Bootstrap 4')
                    ->assertSeeLink('Font Awesome 5')
                    ->assertSeeLink('Spatie')
                    ->assertSeeLink('Cleanique Coders')
                    ->assertSeeLink('Documentation')
                    ->assertSeeLink('GitHub')
                    ->assertSeeLink('Login')
                    ->assertSeeLink('Register');
        });
    }
}
