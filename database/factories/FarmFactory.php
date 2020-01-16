<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Farm::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'postcode' => $faker->postcode,
        'total_area_m2' => $faker->numberBetween(1,100000),
        'team_id' => $faker->numberBetween(1,10),
        'uuid' => $faker->unique()->uuid,
    ];
});
