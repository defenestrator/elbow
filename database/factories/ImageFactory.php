<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(Elbow\Image::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'large'             => $faker->imageUrl(1280,1280, 'cats'),
        'medium'            => $faker->imageUrl(800,800, 'sports'),
        'small'            => $faker->imageUrl(320,320, 'cats'),
    ];
});
