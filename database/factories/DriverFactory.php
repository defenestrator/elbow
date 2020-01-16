<?php

use Faker\Generator as Faker;

$factory->define(Elbow\Driver::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'name'              => $faker->word,
        'model'             => $faker->word,
        'manufacturer_id'   => $faker->numberBetween(1,10)
    ];
});
