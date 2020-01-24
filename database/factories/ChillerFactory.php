<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Chiller::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    $id = hex2bin(preg_replace('/-/', '', Str::orderedUuid()));
    return [
        'id'              => $id,
        'user_id'           => $faker->randomElement($nelement),  
        'model'             => $faker->word . '_' . $faker->numberBetween(2, 5000),
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
