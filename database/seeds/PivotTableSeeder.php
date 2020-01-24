<?php

use DatabaseSeeder as Seeder;
use Illuminate\Support\Facades\DB;
use Elbow\Plan;
use Elbow\Feature;

class PivotTableSeeder extends Seeder
{
    public function featureId()
    {
        return Feature::select('id')->orderByRaw("RAND()")->first()->id;
    }
    
    public function planId()
    {
        return Plan::select('id')->orderByRaw("RAND()")->first()->id;
    }

    public function generate()
    {
        $i = 0;
        while ($i < 10) 
        {
            DB::table('cycle_stage')->insert([
                'id' => $this->uuid(),                
                'cycle_id' => $this->cycleId(), 
                'stage_id' => $this->stageId()
                ]);
            DB::table('reservoir_stage')->insert([
                'id' => $this->uuid(),
                'reservoir_id' => $this->reservoirId(), 
                'stage_id' => $this->stageId()
                ]);
            DB::table('harvest_plant')->insert([
                'id' => $this->uuid(),
                'harvest_id' => $this->harvestId(), 
                'plant_id' => $this->plantId()
                ]);
            DB::table('feature_plan')->insert([
                'id' => $this->uuid(),
                'feature_id' => $this->featureId(), 
                'plan_id' => $this->planId()
                ]);
            DB::table('light_fixture_stage')->insert([
                'id' => $this->uuid(),
                'light_fixture_id' => $this->lightFixtureId(), 
                'stage_id' => $this->stageId()
                ]);
            DB::table('ballast_light_fixture')->insert([
                'id' => $this->uuid(),
                'ballast_id' => $this->ballastId(), 
                'light_fixture_id' => $this->lightFixtureId()
                ]);
            DB::table('driver_light_fixture')->insert([
                'id' => $this->uuid(),                
                'driver_id' => $this->driverId(), 
                'light_fixture_id' => $this->lightFixtureId()
                ]);
            DB::table('lamp_light_fixture')->insert([
                'id' => $this->uuid(),
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
