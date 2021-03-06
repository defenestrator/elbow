<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\HvacAppliance::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'user_id'           => $faker->randomElement($nelement),  
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
