<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Harvest::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'cycle_id' => $faker->numberBetween(1, 10),
        'notes'    => $faker->randomElement([null, $faker->paragraph])    
    ];
});
