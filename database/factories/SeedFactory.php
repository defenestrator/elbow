<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Seed::class, function (Faker $faker) {

    $qty = $faker->randomElement([5,6,10,12,15,20,30]);
    $price = $qty * 10000;
    return [
        'description'       => $faker->paragraph,
        'strain_id'         => $faker->numberBetween(1, 10),
        'seed_company_id'   => $faker->numberBetween(1, 10),
        'qty_per_pack'      => $qty,
        'price'             => $price,
        'inventory'         => $faker->numberBetween(1,100),
        'feminized'         => $faker->boolean,
        'autoflower'        => $faker->boolean
    ];
});
