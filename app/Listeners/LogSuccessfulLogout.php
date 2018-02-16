<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;

class LogSuccessfulLogout
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
     * @param Logout $event
     */
    public function handle(Logout $event)
    {
        audit($event->user, 'User successfully logged out.');
    }
}
