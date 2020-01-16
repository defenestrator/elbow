<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Sensor::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    return [
        'uuid'              => $faker->uuid,
        'sensor_type_id'    => $faker->numberBetween(1, 10),
        'manufacturer_id'   => $faker->randomElement($nelement),
        'name'              => $faker->word,
    ];
});
