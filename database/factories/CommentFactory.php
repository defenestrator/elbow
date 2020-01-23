<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Comment::class, function (Faker $faker) {
    $uuid = preg_replace('/-/', '', Str::orderedUuid());
    return [
        'uuid'            => $uuid,
        'title'           => $faker->word,
        'author_id'       => 'deaddeaddeaddeaddeaddeaddeaddead',
        'content_id'      => 'deaddeaddeaddeaddeaddeaddeaddead',
        'body'            => $faker->paragraph,
    ];
});
