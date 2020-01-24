<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Giveaway::class, function (Faker $faker) {
    return [
        'title'             => $faker->sentence,
        'description'       => $faker->paragraph,
        'image'             => $faker->imageUrl,
        'ends_at'           => $faker->dateTimeThisYear()
    ];
});
