<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 

$factory->define(Elbow\Comment::class, function (Faker $faker) {
    return [
        'title'           => $faker->word,
        'body'            => $faker->paragraph,
    ];
});
