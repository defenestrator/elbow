<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Giveaway::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'title'             => $faker->sentence,
        'description'       => $faker->paragraph,
        'image'             => $faker->imageUrl,
        'ends_at'           => $faker->dateTimeThisYear()
    ];
});
