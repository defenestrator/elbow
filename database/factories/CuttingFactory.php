<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Cutting;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Cutting::class, function (Faker $faker) {

    $seedco = factory(Elbow\SeedCompany::class);

    return [
        'strain_id'         => factory(Elbow\Strain::class),
        'seed_company_id'   => $faker->randomElement([$seedco, null]),
        'user_id'           => factory(Elbow\User::class),
        'price'             => $faker->numberBetween(1000,10000000),
        'description'       => $faker->paragraph,
        'inventory'         => $faker->numberBetween(1,87)
    ];
});
