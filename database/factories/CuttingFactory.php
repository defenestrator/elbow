<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Cutting;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Cutting::class, function (Faker $faker) {

    $seedco = Elbow\SeedCompany::get('uuid')->first()->uuid;
    
    $user = Elbow\User::get('uuid')->first()->uuid;
    
    $strain = Elbow\Strain::get('uuid')->first()->uuid;

    return [
        
        'strain_id'         => $strain,
        'seed_company_id'   => $faker->randomElement([$seedco, null]),
        'user_id'           => $user,
        'price'             => $faker->numberBetween(1000,10000000),
        'description'       => $faker->paragraph,
        'inventory'         => $faker->numberBetween(1,87)
    ];
});
