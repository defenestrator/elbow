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
            'user_id'           => $this->userId(),
            'commentable_id'    => $this->contentId(),
            'commentable_type'  => "Comment\Model"
        ]);
    }
}
