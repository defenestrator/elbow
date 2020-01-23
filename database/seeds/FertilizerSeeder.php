<?php

use DatabaseSeeder as Seeder;

class FertilizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Fertilizer::class, 10)->create();
    }
}
