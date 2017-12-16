<?php

namespace OSI\Listeners;

use Illuminate\Auth\Events\PasswordReset;

class LogPasswordReset
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PasswordReset  $event
     * @return void
     */
    public function handle(PasswordReset $event)
    {
        userlog($event->user, 'User successfully logged in.');
    }
}
