<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Content::class, function (Faker $faker) {
    return [
        'slug'              => $faker->slug,
        'title'             => $faker->sentence,
        'body'              => $faker->paragraph,
        'fields'            => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),    
    ];
});
