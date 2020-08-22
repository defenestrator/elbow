<?php

use DatabaseSeeder as Seeder;

class AreaTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
                'custom'       => 'some other unlisted type'
            ];
        
        foreach(array_keys($areaTypes) as $areaType) { 
            $description = $areaTypes[$areaType];
            Elbow\AreaType::create(['name' => $areaType, 'description' => $description]);      
        }
        return true;
    }
}
