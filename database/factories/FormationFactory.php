<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Formation;
use App\User;
use Faker\Generator as Faker;

$factory->define(Formation::class, function (Faker $faker) {
    return [
        'user_id'=> User::get('id')->random(),
        'titre' => $faker ->word(),
        'contenu'=> $faker -> sentence(),
        'created_at' => now()
    ];
});
