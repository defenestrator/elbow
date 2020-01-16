<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Team::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'biography' => $faker->paragraph(),
        'owner_id' => $faker->numberBetween(1,10),
        'uuid' => $faker->unique()->uuid,
    ];
});
