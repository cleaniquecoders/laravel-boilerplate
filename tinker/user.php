<?php

use OSI\Models\Address;
use OSI\Models\Email;
use OSI\Models\Phone;
use OSI\Models\User;

$user = factory(User::class, 1)
    ->create()
    ->each(function ($user) {
        factory(Address::class, 2)->create(['addressable_id' => $user->id, 'addressable_type' => OSI\Models\User::class]);
        factory(Phone::class, 3)->create(['phoneable_id' => $user->id, 'phoneable_type' => OSI\Models\User::class]);
        factory(Email::class, 3)->create(['emailable_id' => $user->id, 'emailable_type' => OSI\Models\User::class]);
    });
