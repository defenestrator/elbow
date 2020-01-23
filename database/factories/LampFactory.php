<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Lamp::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->randomElement($nelement),  
        'model'             => $faker->word . '_' . $faker->numberBetween(2, 5000),
        'specification'     => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),
        'watts'             => $faker->randomElement([250,400,600,1000,1200]),
        'type'              => $faker->randomElement(['HID', 'LED', 'CFL', 'T5HO Fluorescent']),
        'ppf'               => $faker->numberBetween(90,500),
        'lumens'            => $faker->numberBetween(100,1000000),
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
