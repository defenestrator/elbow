<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\Breeder;
use Faker\Generator as Faker; 

$factory->define(Elbow\Breeder::class, function (Faker $faker) {
    return [
        'user_id'               => factory(Elbow\User::class),
        'name'                  => $faker->word,
        'description'           => $faker->paragraph,
        'url'                   => $faker->url,
        'ucpc'                  => $faker->unique()->uuid,
        'image'                 => $faker->imageUrl,
        'cannabis_reports_link' => $faker->url,
    ];
});
