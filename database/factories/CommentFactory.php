<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(Elbow\Comment::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid, 
        'title'              => $faker->word,
        'author_id'           => $faker->numberBetween(1,10),    
        'body'             => $faker->paragraph,
    ];
});
