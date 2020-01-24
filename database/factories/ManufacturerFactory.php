<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Manufacturer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'postcode' => $faker->postcode,
        'phone' => $faker->phoneNumber
    ];
});
