<?php

use Illuminate\Database\Seeder;

class StrainSeeder extends SeedCompanySeeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $strainUuid = DB::table('strains')->where('uuid', null)->get();
        // $strainUuid->each( function($record) {
        //         DB::table('strains')->where('id', $record->id)->update(['uuid' => $this->uuid()]);
        //         return DB::table('strains')->where('id', $record->id)->get();
        //     }); 
        // $strainSeedCoId = DB::table('strains')->where('seed_company_id', null)->get();
        // $strainSeedCoId->each( function ($record) {
        //     $seedCo = DB::table('seed_companies')->where('name', $record->seed_company)->get();
        //     DB::table('strains')->where('seed_company', $record->seed_company)->update(['seed_company_id' => $seedCo[0]->id]);
        // });
        // return true;
    }
}
