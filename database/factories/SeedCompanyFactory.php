<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\SeedCompany;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\SeedCompany::class, function (Faker $faker) {
    $user = Elbow\User::get('id')->first()->id;
    return [
        'user_id'               => $faker->randomElement([$user, null]),
        'name'                  => $faker->word,
        'description'           => $faker->paragraph,
        'url'                   => $faker->url,
        'ucpc'                  => $faker->unique()->uuid,
        'image'                 => $faker->imageUrl,
        'cannabis_reports_link' => $faker->url,
    ];
});
