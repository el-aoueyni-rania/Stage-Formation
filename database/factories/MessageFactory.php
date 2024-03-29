<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name' => $faker ->word(),
        'email'=> $faker ->unique()->safeEmail,
        'phone' => $faker ->phoneNumber(),
        'message' => $faker ->sentence(),
        'created_at' => now()
    ];
});
