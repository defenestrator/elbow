<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Stage::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'name'              => $faker->name,
        'description'       => $faker->paragraph,
        'area_id'           => $faker->numberBetween(1, 10),
        'photoperiod'       => $faker->numberBetween(10, 24)
    ];
});
