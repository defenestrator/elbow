<?php

use DatabaseSeeder as Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\User::class, 10)->create();
    }
}
