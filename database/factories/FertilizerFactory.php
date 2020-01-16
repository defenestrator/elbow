<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Fertilizer::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->randomElement($nelement),    
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
