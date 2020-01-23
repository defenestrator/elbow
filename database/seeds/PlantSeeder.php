<?php

use DatabaseSeeder as Seeder;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Plant::class, 10)->create();
    }
}
