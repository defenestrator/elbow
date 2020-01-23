<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Content::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'author_id'         => $faker->numberBetween(1,10),
        'slug'              => $faker->slug,
        'title'             => $faker->sentence,
        'body'              => $faker->paragraph,
        'fields'            => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null]),    
    ];
});
