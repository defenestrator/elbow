<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\Strain::class, function (Faker $faker) {
    $seedco = Elbow\Breeder::find(1)->first();

    return [
        'breeder_id'           => $seedco->id,
        'breeder'              => $seedco->name,
        'lineage'                   => $faker->sentence,
        'genetics'                  => $faker->word . ' x ' . $faker->word,
        'name'                      => $faker->name,
        'description'               => $faker->paragraph,
        'url'                       => $faker->url,
        'image'                     => $faker->imageUrl,
        'flowering_time_min'        => $faker->numberBetween(8,9),
        'flowering_time_max'        => $faker->numberBetween(10,12),
        'cannabis_reports_link'     => $faker->url,
    ];
});
