<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\ContactFormMessage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email_address' => $faker->safeEmail,
        'message' => $faker->paragraph,
    ];
});
