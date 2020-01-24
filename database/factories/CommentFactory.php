<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Comment::class, function (Faker $faker) {
    $id = preg_replace('/-/', '', Str::orderedUuid());
    return [
        'id'            => $id,
        'title'           => $faker->word,
        'body'            => $faker->paragraph,
    ];
});
