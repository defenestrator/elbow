<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class SeedCompanySeeder extends Seeder
{

    public function uuid()
    {
        return Uuid::uuid4();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $seedCoUuid = DB::table('seed_companies')->where('uuid', null)->get();

        // $seedCoUuid->each( function($record){
        //         DB::table('seed_companies')->where('id', $record->id)->update(['uuid' => $this->uuid()]);
        //         return DB::table('seed_companies')->where('id', $record->id)->get();
        //     }); 
        // return DB::table('seed_companies')->where('uuid', null)->get();
    }
}
