<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\ReflectorHood::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'user_id'           => $faker->randomElement($nelement),  
        'model'             => $faker->word . '_' . $faker->numberBetween(2, 5000),
        'specification'     => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
