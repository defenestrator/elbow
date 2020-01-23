<?php

use DatabaseSeeder as Seeder;

class FanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Fan::class, 10)->create();
    }
}