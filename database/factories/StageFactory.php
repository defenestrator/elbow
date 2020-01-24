<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Stage::class, function (Faker $faker) {
    $area = Elbow\Area::get('id')->first()->id;
    return [
        'name'              => $faker->name,
        'description'       => $faker->paragraph,
        'area_id'           => $area,
        'photoperiod'       => $faker->numberBetween(10, 24)
    ];
});
