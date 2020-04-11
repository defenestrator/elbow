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
        $this->pop();
    }

    public function pop()
    {
        DB::unprepared(file_get_contents('database/prod_strains_2020-01-23-21-27.sql')); 
        DB::unprepared(file_get_contents('database/cannabis_strains.sql')); 
    }
}
