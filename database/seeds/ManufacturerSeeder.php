<?php

use DatabaseSeeder as Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Manufacturer::class, 10)->create();
    }
}
