<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Ballast::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'name'              => $faker->word,
        'model'             => $faker->word,
        'description'       => $faker->paragraph,
        'watts'             => $faker->randomElement([250,400,600,1000,1200]),
        'manufacturer_id'   => $faker->numberBetween(1,10)
    ];
});
