<?php

use DatabaseSeeder as Seeder;

class MediumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Medium::class, 10)->create(['manufacturer_id' => $this->manufacturerId()]);
    }
}
