<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    /** @test */
    public function get_status_code_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
