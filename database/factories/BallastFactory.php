<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Ballast::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    
    return [
        'uuid'              => $faker->unique()->uuid,
        'model'             => $faker->word . '_' . $faker->numberBetween(2, 5000),
        'user_id'           => $faker->randomElement($nelement),      
        'specification'     => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),
        'watts'             => $faker->randomElement([250,400,600,1000,1200]),
        'manufacturer_id'   => $faker->numberBetween(1,10)
    ];
});
