<?php

use DatabaseSeeder as Seeder;

use Elbow\AreaType;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Area::class, 10)->create([
            'farm_id'       => $this->farmId(),
            'area_type_id'  => AreaType::get('uuid')->first()->uuid
            ]);
    }
}
