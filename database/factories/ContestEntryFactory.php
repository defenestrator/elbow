<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\ContestEntry::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'giveaway_id'       => $faker->numberBetween(1, 10),
        'email_verified_at' => $faker->dateTimeThisMonth(),
        'email'             => $faker->email
    ];
});
