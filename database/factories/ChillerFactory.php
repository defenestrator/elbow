<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Chiller::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->randomElement($nelement),  
        'model'             => $faker->word . '_' . $faker->numberBetween(2, 5000),
        'manufacturer_id'   => $faker->randomElement($nelement),   
    ];
});
