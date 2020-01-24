<?php

use DatabaseSeeder as Seeder;

class SeedCompanySeeder extends Seeder
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
        DB::unprepared(file_get_contents('database/prod_seed_companies_2020-01-23-21-26.sql'));
    }
}
