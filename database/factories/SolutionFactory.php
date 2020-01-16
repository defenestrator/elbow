<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Solution::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    $ph = $faker->numberBetween(1, 14) . '.' . $faker->NumberBetween(0,9);

    return [
        'uuid'      => $faker->unique()->uuid,
        'ph'        => $faker->name,
        'user_id'   => $faker->numberBetween(1,10),
        'sensor_id' => $faker->randomElement($nelement),
        'ph'        => $ph,
        'ec'        => $faker->NumberBetween(50,4000),
        'tds'       => $faker->NumberBetween(1,2000),

    ];
});
