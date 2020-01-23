<?php

use DatabaseSeeder as Seeder;

class HvacApplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\HvacAppliance::class, 10)->create();
    }
}
