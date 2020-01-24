<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Elbow\SensorType;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

$factory->define(Elbow\SensorType::class, function (Faker $faker) {
    $nelement = [$faker->numberBetween(1,10), null];
    $jsornull = ['{ "'. $faker->word . '":' . '"' . $faker->paragraph . '"}', null];
    $sensorTypes = [
            'pH',
            'temperature',
            'humidity',
            'barometer',
            'o2',
            'co2',
            'water_pressure',
            'water_level',
            'lux',
            'par',
        ];        
        return [
            'type'          => $faker->unique()->randomElement($sensorTypes),
            'model'         => $faker->randomElement($nelement),
            'specification' => $faker->randomElement($jsornull)
        ];

});
