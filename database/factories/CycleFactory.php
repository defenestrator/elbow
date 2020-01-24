<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;
use Elbow\Farm;
use Elbow\Medium;

$factory->define(Elbow\Cycle::class, function (Faker $faker) {
    $id   = preg_replace('/-/', '', Str::orderedUuid());
    $farm   = Farm::select('id')->orderByRaw("RAND()")->first()->id; 
    $medium = Medium::select('id')->orderByRaw("RAND()")->first()->id;

    return [
        'name'              => $faker->name,
        'description'       => $faker->paragraph,
        'layout'            => $faker->randomElement(['Horizontal', 'Vertical', 'Stadium', 'Espalier']),
        'method'            => $faker->sentence,
        'farm_id'           => $farm,
        'medium_id'         => $medium,
    ];
});
