<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Medium::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'manufacturer_id'   => $faker->numberBetween(1,10),
        'name'              => $faker->word,
        'description'       => $faker->paragraph,
        'ingredients'       => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null])
    ];
});
