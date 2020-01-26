<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Elbow\Farm;
use Elbow\User;
use Elbow\Team;
use Elbow\Manufacturer;
use Elbow\Content;
use Elbow\Cycle;
use Elbow\Stage;
use Elbow\LightFixture;
use Elbow\Ballast;
use Elbow\Reservoir;
use Elbow\Harvest;
use Elbow\Plant;
use Elbow\SeedCompany;
use Elbow\Driver;
use Elbow\Lamp;
use Elbow\Edit;

class DatabaseSeeder extends Seeder
{
    public function uuid()
    {
        return preg_replace('/-/', '', Str::orderedUuid());
    }

    public function userId()
    {
        return User::select('id')->first()->id;
    }

    public function manufacturerId()
    {
        return Manufacturer::select('id')->first()->id;
    }

    public function farmId()
    {
        return Farm::select('id')->first()->id; 
    }

    public function contentId()
    {
        return Content::select('id')->first()->id; 
    }

    public function content()
    {

        return Content::get('title', 'body', 'author_id', 'slug', 'fields')->first()->toJson(); 
    }

    public function hashed()
    {
        return  sha1($this->content());
    }
    
    public function cycleId()
    {
        return Cycle::select('id')->first()->id;
    }

    public function seedCompanyId()
    {
        return SeedCompany::select('id')->first()->id;
    }
    
    public function stageId()
    {
        return Stage::select('id')->first()->id;
    }
    
    public function lightFixtureId()
    {
        return LightFixture::select('id')->first()->id;
    }
    
    public function reservoirId()
    {
        return Reservoir::select('id')->first()->id;
    }
        
    public function harvestId()
    {
        return Harvest::select('id')->first()->id;
    }

    public function ballastId()
    {
        return Ballast::select('id')->first()->id;
    }

    public function plantId()
    {
        return Plant::select('id')->first()->id;
    }

    public function driverId()
    {
        return Driver::select('id')->first()->id;
    }

    public function lampId()
    {
        return Lamp::select('id')->first()->id;
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {         
        $this->call([
            AreaTypesSeeder::class,
            UserSeeder::class,
            FarmSeeder::class,    
            AreaSeeder::class, 
            ManufacturerSeeder::class, 
            MediumSeeder::class, 
            ContentSeeder::class, 
            CommentSeeder::class,
            CycleSeeder::class,
            StageSeeder::class,
            TeamSeeder::class,
            SeedCompanySeeder::class,
            StrainSeeder::class, 
            FeatureSeeder::class,
            PlanSeeder::class,
            LightFixtureSeeder::class, 
            SeedSeeder::class, 
            CuttingSeeder::class, 
            StageSeeder::class, 
            PlantSeeder::class, 
            SolutionSeeder::class, 
            EnvironmentSeeder::class, 
            SensorTypeSeeder::class, 
            SensorSeeder::class, 
            BallastSeeder::class, 
            LampSeeder::class, 
            DriverSeeder::class, 
            ReservoirSeeder::class, 
            FertilizerSeeder::class, 
            HvacApplianceSeeder::class, 
            FanSeeder::class, 
            ChillerSeeder::class, 
            ReflectorHoodSeeder::class, 
            HarvestSeeder::class, 
            ImageSeeder::class, 
            RaffleSeeder::class, 
            GiveawaySeeder::class, 
            ContestEntrySeeder::class, 
            ContactFormMessageSeeder::class, 
            EditSeeder::class,
            PivotTableSeeder::class,  
        ]);       
    }
}
