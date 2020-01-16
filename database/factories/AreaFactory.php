<?php

use Faker\Generator as Faker;

$factory->define(\Elbow\Area::class, function (Faker $faker) {
    return [
            'name'              => $faker->name,
            'description'       => $faker->paragraph,
            'farm_id'           => $faker->numberBetween(1, 10),
            'floorspace_cm2'    => $faker->numberBetween(100, 100000),
            'growspace_cm2'     => $faker->numberBetween(100, 100000),
            'area_type_id'      => $faker->numberBetween(1, 10),
            'uuid'              => $faker->unique()->uuid,
    ];
});
