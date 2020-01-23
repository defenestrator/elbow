<?php

use DatabaseSeeder as Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Stage::class, 10)->create();
    }
}
