<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Cutting;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Cutting::class, function (Faker $faker) {

    return [
        'strain_id'         => 1,
        'breeder_id'        => 1,
        'user_id'           => factory(Elbow\User::class),
        'price'             => $faker->numberBetween(1000,10000000),
        'description'       => $faker->paragraph,
        'inventory'         => $faker->numberBetween(1,87)
    ];
});
