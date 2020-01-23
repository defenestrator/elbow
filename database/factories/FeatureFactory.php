<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Feature;
use Faker\Generator as Faker;

$factory->define(Feature::class, function (Faker $faker) {
    return [
        'name'          => $faker->name,
        'description'   => $faker->sentence
    ];
});
