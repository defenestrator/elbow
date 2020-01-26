<?php

use DatabaseSeeder as Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Team::class, 10)->create([]);
    }
}
