<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;

class AssignDefaultRole
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
     * @param Registered $event
     */
    public function handle(Registered $event)
    {
        $event->user->assignRole('user');
    }
}
