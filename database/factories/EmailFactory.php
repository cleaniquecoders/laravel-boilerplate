<?php

use Faker\Generator as Faker;

$factory->define(\OSI\Models\Email::class, function (Faker $faker) {
    return [
        'email' => $faker->companyEmail,
    ];
});
