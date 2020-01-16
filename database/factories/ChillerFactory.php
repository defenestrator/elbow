<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Chiller::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'name'              => $faker->word,
        'model'             => $faker->word,
        'description'       => $faker->paragraph,
        'manufacturer_id'   => $faker->numberBetween(1,10)
    ];
});
