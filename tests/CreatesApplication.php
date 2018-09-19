<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        if (! file_exists('database/tracker.sqlite')) {
            touch('database/tracker.sqlite');
        }

        if (! file_exists('database/database.sqlite')) {
            touch('database/database.sqlite');
        }

        parent::setUp();
    }

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
