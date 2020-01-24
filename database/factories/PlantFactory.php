<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Plant::class, function (Faker $faker) {
    
    $seedco = Elbow\SeedCompany::get('uuid')->first()->uuid;
    
    $user = Elbow\User::get('uuid')->first()->uuid;
    
    $strain = Elbow\Strain::get('uuid')->first()->uuid;
    
    $cycle  = Elbow\Cycle::get('uuid')->first()->uuid;
    
    return [
        'strain_id'             => $faker->randomElement([$strain, null]),
        'seed_company_id'       => $faker->randomElement([$seedco, null]),
        'user_id'               => $user,
        'cycle_id'              => $cycle,
        'notes'                 => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null])
    ];
});
