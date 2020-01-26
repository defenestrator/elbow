<?php

use DatabaseSeeder as Seeder;
use Elbow\Edit;

class EditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This is an immutable model 
     * sha1 hashed Json string value
     *
     * @return void
     */
    public function run()
    {
        factory(Edit::class, 10)->create([
            'editable_id'   => $this->contentId(),
            'editable_type' => "Elbow\Content",
            'state'         => $this->content(),
            'hash'          => $this->hashed(),   
            'user_id'       => $this->userId(), 
        ]);
    }
}
