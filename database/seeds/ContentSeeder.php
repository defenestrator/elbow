<?php

use DatabaseSeeder as Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Content::class, 10)->create([
            'author_id'   => $this->userId() 
        ]);
    }
}
