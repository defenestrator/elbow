<?php

use DatabaseSeeder as Seeder;
use Illuminate\Support\Facades\DB;
use Elbow\Plan;
use Elbow\Feature;

class PivotTableSeeder extends Seeder
{
    public function featureId()
    {
        return Feature::select('uuid')->orderByRaw("RAND()")->first()->uuid;
    }
    
    public function planId()
    {
        return Plan::select('uuid')->orderByRaw("RAND()")->first()->uuid;
    }

    public function generate()
    {
        $i = 0;
        while ($i < 10) 
        {
            DB::table('cycle_stage')->insert([
                'uuid' => $this->uuid(),                
                'cycle_id' => $this->cycleId(), 
                'stage_id' => $this->stageId()
                ]);
            DB::table('reservoir_stage')->insert([
                'uuid' => $this->uuid(),
                'reservoir_id' => $this->reservoirId(), 
                'stage_id' => $this->stageId()
                ]);
            DB::table('harvest_plant')->insert([
                'uuid' => $this->uuid(),
                'harvest_id' => $this->harvestId(), 
                'plant_id' => $this->plantId()
                ]);
            DB::table('feature_plan')->insert([
                'uuid' => $this->uuid(),
                'feature_id' => $this->featureId(), 
                'plan_id' => $this->planId()
                ]);
            DB::table('light_fixture_stage')->insert([
                'uuid' => $this->uuid(),
                'light_fixture_id' => $this->lightFixtureId(), 
                'stage_id' => $this->stageId()
                ]);
            DB::table('ballast_light_fixture')->insert([
                'uuid' => $this->uuid(),
                'ballast_id' => $this->ballastId(), 
                'light_fixture_id' => $this->lightFixtureId()
                ]);
            DB::table('driver_light_fixture')->insert([
                'uuid' => $this->uuid(),                
                'driver_id' => $this->driverId(), 
                'light_fixture_id' => $this->lightFixtureId()
                ]);
            DB::table('lamp_light_fixture')->insert([
                'uuid' => $this->uuid(),
                'lamp_id' => $this->lampId(), 
                'light_fixture_id' => $this->lightFixtureId()
                ]);

            $i += 1;
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->generate();
    }
}
