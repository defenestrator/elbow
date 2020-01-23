<?php

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Plan::class, function (Faker $faker) {
    return [
        'name'          => 'name',
        'stripe_plan'   => 'stripe name'
    ];
});
