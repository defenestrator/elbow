<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Cutting;
use Faker\Generator as Faker;

$factory->define(Cutting::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'strain_id'         => $faker->numberBetween(1,8000),
        'seed_company_id'   => $faker->numberBetween(1,500),
        'user_id'           => $faker->numberBetween(1,10),
        'price'             => $faker->numberBetween(1000,10000000),
        'description'       => $faker->paragraph,
        'inventory'         => $faker->numberBetween(1,87)
    ];
});
