<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Plant::class, function (Faker $faker) {
    
    $seedco = Elbow\Breeder::get('id')->first()->id;
    
    $user = Elbow\User::get('id')->first()->id;
    
    $strain = Elbow\Strain::get('id')->first()->id;
    
    $cycle  = Elbow\Cycle::get('id')->first()->id;
    
    return [
        'strain_id'             => $faker->randomElement([$strain, null]),
        'breeder_id'       => $faker->randomElement([$seedco, null]),
        'user_id'               => $user,
        'cycle_id'              => $cycle,
        'notes'                 => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null])
    ];
});
