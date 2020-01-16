<?php

use Faker\Generator as Faker;

$factory->define(Elbow\LightFixture::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];

    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->randomElement($nelement),    
        'model'             => $faker->word,
        'specification'     => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),
        'watts'             => $faker->randomElement([250,400,600,1000,1200]),
        'type'              => $faker->randomElement(['HID', 'LED', 'CFL', 'T5HO Fluorescent']),
        'ppf'               => $faker->numberBetween(100,1000000),
        'manufacturer_id'   => $faker->randomElement($nelement),
    ];
});
