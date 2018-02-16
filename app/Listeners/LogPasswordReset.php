<?php

namespace App\Listeners;

use Illuminate\Auth\Events\PasswordReset;

class LogPasswordReset
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
     * @param PasswordReset $event
     */
    public function handle(PasswordReset $event)
    {
        audit($event->user, 'User successfully reset password.');
    }
}
