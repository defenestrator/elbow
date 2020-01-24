<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Medium::class, function (Faker $faker) {
    return [
        'manufacturer_id'   => $faker->numberBetween(1,10),
        'name'              => $faker->word,
        'description'       => $faker->paragraph,
        'ingredients'       => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null])
    ];
});
