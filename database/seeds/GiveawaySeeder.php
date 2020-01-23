<?php

use DatabaseSeeder as Seeder;

class GiveawaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Giveaway::class, 10)->create();
    }
}
