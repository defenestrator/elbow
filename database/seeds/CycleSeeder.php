<?php

use DatabaseSeeder as Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Cycle::class, 10)->create([
            'uuid' => $this->uuid()
        ]);
    }
}
