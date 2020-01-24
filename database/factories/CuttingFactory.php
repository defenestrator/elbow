<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Cutting;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Cutting::class, function (Faker $faker) {

    $seedco = Elbow\SeedCompany::get('id')->first()->id;
    
    $user = Elbow\User::get('id')->first()->id;
    
    $strain = Elbow\Strain::get('id')->first()->id;

    return [
        
        'strain_id'         => $strain,
        'seed_company_id'   => $faker->randomElement([$seedco, null]),
        'user_id'           => $user,
        'price'             => $faker->numberBetween(1000,10000000),
        'description'       => $faker->paragraph,
        'inventory'         => $faker->numberBetween(1,87)
    ];
});
