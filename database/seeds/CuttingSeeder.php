<?php

use DatabaseSeeder as Seeder;

class CuttingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Cutting::class, 10)->create();
    }
}
