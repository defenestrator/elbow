<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Fan::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    
    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->randomElement($nelement),  
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
