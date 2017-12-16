<?php

namespace OSI\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Auth\Events\Registered'    => [
            'OSI\Listeners\AssignDefaultRole',
        ],
        'Illuminate\Auth\Events\Login'         => [
            'OSI\Listeners\LogSuccessfulLogin',
        ],
        'Illuminate\Auth\Events\Failed'        => [
            'OSI\Listeners\LogFailedLogin',
        ],
        'Illuminate\Auth\Events\Logout'        => [
            'OSI\Listeners\LogSuccessfulLogout',
        ],
        'Illuminate\Auth\Events\PasswordReset' => [
            'OSI\Listeners\LogPasswordReset',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
