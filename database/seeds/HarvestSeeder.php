<?php

use DatabaseSeeder as Seeder;

class HarvestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Harvest::class, 10)->create();
    }
}
