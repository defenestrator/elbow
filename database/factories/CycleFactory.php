<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Cycle::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'name'              => $faker->name,
        'description'       => $faker->paragraph,
        'layout'            => $faker->randomElement(['Horizontal', 'Vertical', 'Stadium', 'Espalier']),
        'method'            => $faker->sentence,
        'farm_id'           => $faker->numberBetween(1, 10),
        'medium_id'         => $faker->numberBetween(1, 10),
    ];
});
