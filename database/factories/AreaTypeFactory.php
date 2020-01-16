<?php

use Faker\Generator as Faker;

$factory->define(Elbow\AreaType::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'description'   => $faker->paragraph
    ];
});
