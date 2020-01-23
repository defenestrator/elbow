<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Ballast::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    $uuid = hex2bin(preg_replace('/-/', '', Str::orderedUuid()));
    return [
        'uuid'              => $uuid,
        'model'             => $faker->word . '_' . $faker->numberBetween(2, 5000),
        'user_id'           => $faker->randomElement($nelement),      
        'specification'     => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),
        'watts'             => $faker->randomElement([250,400,600,1000,1200]),
        'manufacturer_id'   => $faker->numberBetween(1,10)
    ];
});
