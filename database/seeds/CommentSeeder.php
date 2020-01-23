<?php

use DatabaseSeeder as Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Comment::class, 10)->create([
            'author_id'           => $this->userId(),
            'content_id'        => $this->contentId()
        ]);
    }
}
