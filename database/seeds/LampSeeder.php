<?php

use DatabaseSeeder as Seeder;

class LampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Lamp::class, 10)->create();
    }
}
