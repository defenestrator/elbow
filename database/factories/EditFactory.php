<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Edit::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    
    return [
        'editable_type'     => "Elbow\Content",   
    ];
});
