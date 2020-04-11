<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\SeedCompany;
use Faker\Generator as Faker; 

$factory->define(Elbow\SeedCompany::class, function (Faker $faker) {
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
