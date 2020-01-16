<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(Elbow\Comment::class, function (Faker $faker) {
    return [
        'uuid'              => $faker->unique()->uuid,
        'title'              => $faker->word,
        'user_id'           => $faker->numberBetween(1,10),    
        'body'             => $faker->word,
    ];
});
