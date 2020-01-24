<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Sensor::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    return [
        'sensor_type_id'    => $faker->numberBetween(1, 10),
        'manufacturer_id'   => $faker->randomElement($nelement),
        'name'              => $faker->word,
    ];
});
