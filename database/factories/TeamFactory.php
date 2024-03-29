<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
    ];
});
