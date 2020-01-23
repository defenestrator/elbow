<?php

use DatabaseSeeder as Seeder;

class ContentEditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\ContentEdit::class, 10)->create([
            'content_id' => $this->contentId(),
            'user_id'   => $this->userId() 
        ]);
    }
}
