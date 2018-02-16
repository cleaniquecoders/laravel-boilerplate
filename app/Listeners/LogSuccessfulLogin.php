<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param Login $event
     */
    public function handle(Login $event)
    {
        audit($event->user, 'User successfully logged in.');
    }
}
