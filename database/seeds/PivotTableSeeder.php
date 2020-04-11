<?php

use DatabaseSeeder as Seeder;
use Illuminate\Support\Facades\DB;
use Elbow\Plan;
use Elbow\Feature;
use Elbow\Team;

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

    public function teamId()
    {
        return Team::select('id')->orderByRaw("RAND()")->first()->id;
    }

    public function generate()
    {
        $i = 0;
        while ($i < 10) 
        {
            DB::table('cycle_stage')->insert([         
                'cycle_id' => $this->cycleId(),
                'stage_id' => $this->stageId(),
            ]);

            DB::table('reservoir_stage')->insert([
                'reservoir_id' => $this->reservoirId(), 
                'stage_id' => $this->stageId(),
            ]);

            DB::table('harvest_plant')->insert([
                'harvest_id' => $this->harvestId(), 
                'plant_id' => $this->plantId()
            ]);

            DB::table('feature_plan')->insert([
                'feature_id' => $this->featureId(), 
                'plan_id' => $this->planId()
            ]);
            
            DB::table('light_fixture_stage')->insert([
                'light_fixture_id' => $this->lightFixtureId(), 
                'stage_id' => $this->stageId()
            ]);
            
            DB::table('ballast_light_fixture')->insert([
                'ballast_id' => $this->ballastId(), 
                'light_fixture_id' => $this->lightFixtureId()
            ]);
            
            DB::table('driver_light_fixture')->insert([            
                'driver_id' => $this->driverId(), 
                'light_fixture_id' => $this->lightFixtureId()
            ]);
            
            DB::table('lamp_light_fixture')->insert([
                'lamp_id' => $this->lampId(), 
                'light_fixture_id' => $this->lightFixtureId()
            ]);
            
            DB::table('team_user')->insert([
                    'team_id'       => $this->teamId(), 
                    'user_id' => $this->userId(),
                    'owner'         => array_rand([true, false],1)  
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
