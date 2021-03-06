<?php

use DatabaseSeeder as Seeder;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Environment::class, 10)->create();
    }
}
