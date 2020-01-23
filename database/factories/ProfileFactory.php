<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(\Elbow\Profile::class, function (Faker $faker) {    
    return [
        'uuid'              => $faker->unique()->uuid,
        'user_id'           => $faker->unique()->numberBetween(1, 10),  
        'avatar'            => $faker->imageUrl(150, 150, 'people'),
        'bio'               => $faker->paragraph
    ];
});
