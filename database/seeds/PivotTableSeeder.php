<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tables = [         
        // Humans
        'team_user',
        // Growing
        'cycle_stage',        
        'reservoir_stage',
        'harvest_plant',
        // Content
        'content_image',
        'content_comment',
        // Application
        'feature_plan',
        ];
        foreach ($tables as $pivot) {
            $parts = explode('_', $pivot, 2);
            for ($i = 0; $i < 9; $i++) {
                DB::table($pivot)
                ->insert([$parts[0].'_id' => $faker->numberBetween(1,10), $parts[1].'_id' => $faker->numberBetween(1,10)]);
            }
            
        }

        DB::table('light_fixture_stage')->insert(['light_fixture_id' => $faker->numberBetween(1,10), 'stage_id' => $faker->numberBetween(1,10)]);
        DB::table('ballast_light_fixture')->insert(['ballast_id' => $faker->numberBetween(1,10), 'light_fixture_id' => $faker->numberBetween(1,10)]);
        DB::table('driver_light_fixture')->insert(['driver_id' => $faker->numberBetween(1,10), 'light_fixture_id' => $faker->numberBetween(1,10)]);
        DB::table('lamp_light_fixture')->insert(['lamp_id' => $faker->numberBetween(1,10), 'light_fixture_id' => $faker->numberBetween(1,10)]);
    }
}
