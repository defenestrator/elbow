<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
     
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        $this->areaTypes(); 
        
        factory(Elbow\User::class, 10)->create();
        factory(Elbow\Team::class, 10)->create();
        factory(Elbow\Farm::class, 10)->create();
        factory(Elbow\Area::class, 10)->create();
        factory(Elbow\Seed::class, 10)->create();
        factory(Elbow\Cutting::class, 10)->create();
        factory(Elbow\Manufacturer::class, 10)->create();
        factory(Elbow\Medium::class, 10)->create();
        factory(Elbow\Cycle::class, 10)->create();
        factory(Elbow\Stage::class, 10)->create();
        factory(Elbow\Plant::class, 10)->create();
        factory(Elbow\Solution::class, 10)->create();
        factory(Elbow\Environment::class, 10)->create();
        factory(Elbow\SensorType::class, 10)->create();
        factory(Elbow\Sensor::class, 10)->create();
        factory(Elbow\LightFixture::class, 10)->create();
        factory(Elbow\Ballast::class, 10)->create();
        factory(Elbow\Lamp::class, 10)->create();
        factory(Elbow\Driver::class, 10)->create();
        factory(Elbow\Reservoir::class, 10)->create();
        factory(Elbow\Fertilizer::class, 10)->create();
        factory(Elbow\HvacAppliance::class, 10)->create();
        factory(Elbow\Fan::class, 10)->create();
        factory(Elbow\Chiller::class, 10)->create();
        factory(Elbow\ReflectorHood::class, 10)->create();
        factory(Elbow\Harvest::class, 10)->create();
        factory(Elbow\Image::class, 10)->create();
        factory(Elbow\Content::class, 10)->create();
        factory(Elbow\Comment::class, 10)->create();
        factory(Elbow\Raffle::class, 10)->create();
        factory(Elbow\Giveaway::class, 10)->create();
        factory(Elbow\ContestEntry::class, 10)->create();
        factory(Elbow\ContactFormMessage::class, 10)->create();
        factory(Elbow\ContentEdit::class, 10)->create();

        $this->others();
        
        
    }  
    
        public function areaTypes() 
    {
        $areaTypes = [
                'grow tent'    => 'generic grow tent',
                'outdoor'      => 'outdoor farm',
                'hoop house'   => 'a simple hoop house',
                'greenhouse'   => 'hard-sided greenhouse',
                'open room'    => 'open-ventilation room',
                'sealed room'  => 'sealed-ventilation room',
                'warehouse'    => 'commercial warehouse building',
                'grow cabinet' => 'hard-sided grow cabinet',
                'closet'       => 'just a closet, yo.',
                'container'    => 'shipping container',
                'custom'       => 'some other, unlisted type'
            ];
        
        foreach(array_keys($areaTypes) as $areaType) { 
            $description = $areaTypes[$areaType];
            \Elbow\AreaType::create(['name' => $areaType, 'description' => $description]);
        }
        return true;
    }

    public function others() 
    {
        $this->call([
            // SeedCompanySeeder::class,
            // StrainSeeder::class,
            PivotTableSeeder::class
        ]);
    }

}
