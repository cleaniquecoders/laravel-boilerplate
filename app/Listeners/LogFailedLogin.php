<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Failed;

class LogFailedLogin
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
     * @param Failed $event
     */
    public function handle(Failed $event)
    {
        // activity()
        //     ->performedOn($event->user)
        //     ->log('Failed log in attempt.');
    }
}
