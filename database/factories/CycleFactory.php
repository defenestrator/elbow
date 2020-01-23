<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;
use Elbow\Farm;
use Elbow\Medium;

$factory->define(Elbow\Cycle::class, function (Faker $faker) {
    $uuid   = preg_replace('/-/', '', Str::orderedUuid());
    $farm   = Farm::select('uuid')->orderByRaw("RAND()")->first()->uuid; 
    $medium = Medium::select('uuid')->orderByRaw("RAND()")->first()->uuid;

    return [
        'name'              => $faker->name,
        'description'       => $faker->paragraph,
        'layout'            => $faker->randomElement(['Horizontal', 'Vertical', 'Stadium', 'Espalier']),
        'method'            => $faker->sentence,
        'farm_id'           => $farm,
        'medium_id'         => $medium,
    ];
});
