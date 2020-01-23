<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Plant::class, function (Faker $faker) {
    return [
        'uuid'                  => $faker->unique()->uuid,
        'strain_id'             => $faker->numberBetween(1, 10),
        'cycle_id'              => $faker->numberBetween(1, 10),
        'notes'                 => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null])
    ];
});
