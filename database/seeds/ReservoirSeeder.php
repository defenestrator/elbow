<?php

use DatabaseSeeder as Seeder;

class ReservoirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Reservoir::class, 10)->create([
            'user_id'           => $this->userId(),
            'manufacturer_id'   => $this->manufacturerId(),
        ]);
    }
}
