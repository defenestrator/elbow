<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Reservoir::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->randomElement($nelement),   
        'name'              => $faker->word,
        'specification'     => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),
        'capacity'          => $faker->randomElement([250,400,600,1000,1200]),
        'auto_dosing'       => $faker->boolean(),
        'manufacturer_id'   => $faker->randomElement($nelement),
    ];
});
