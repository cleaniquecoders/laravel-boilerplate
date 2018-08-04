<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @todo Success / Fail Login
 * @todo Success / Fail Registration
 * @todo Success / Fail Reset Password
 */
class AuthPageTest extends TestCase
{
    /** @test */
    public function login_page_get_status_code_200()
    {
        $this->get(route('login'))->assertOk();
    }

    /** @test */
    public function register_page_get_status_code_200()
    {
        $this->get(route('register'))->assertOk();
    }

    /** @test */
    public function reset_password_page_get_status_code_200()
    {
        $this->get(route('password.request'))->assertOk();
    }
}
