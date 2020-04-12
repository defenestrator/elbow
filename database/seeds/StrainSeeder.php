<?php

use DatabaseSeeder as Seeder;

class StrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents('database/StrainsAndBreeders.sql')); 
    }
}
