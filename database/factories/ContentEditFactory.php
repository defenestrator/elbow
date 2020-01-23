<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\ContentEdit::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    
    return [
        'user_id'       => $faker->numberBetween(1,10),  
        'content_id'    => $faker->numberBetween(1,10),   
        'old_content'   => $faker->randomElement(['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', '[]', '{}']),
    ];
});
