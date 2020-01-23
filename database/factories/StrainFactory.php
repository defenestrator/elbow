<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Strain::class, function (Faker $faker) {
    return [
        'uuid'                      => $faker->unique()->uuid,
        'seed_company_id'           => $faker->numberBetween(1, 10),
        'lineage'                   => $faker->sentence,
        'genetics'                  => $faker->word . ' x ' . $faker->word,
        'seed_company'              => $faker->name,
        'qr'                        => $faker->imageUrl,    
        'name'                      => $faker->name,
        'description'               => $faker->paragraph,
        'url'                       => $faker->url,
        'ucpc'                      => $faker->unique()->uuid,
        'image'                     => $faker->imageUrl,
        'flowering_time_min'        => $faker->numberBetween(8,9),
        'flowering_time_max'        => $faker->numberBetween(10,12),
        'cannabis_reports_link'     => $faker->url,
    ];
});
