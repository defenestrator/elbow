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
        factory(Elbow\Fan::class, 10)->create([
            'user_id'           => $this->userId(),
            'manufacturer_id'   => $this->manufacturerId()
        ]);
    }
}
