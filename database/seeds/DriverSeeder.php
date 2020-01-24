<?php

use DatabaseSeeder as Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Driver::class, 10)->create([
            'user_id'           => $this->userId(),
            'manufacturer_id'   => $this->manufacturerId()
        ]);
    }
}
