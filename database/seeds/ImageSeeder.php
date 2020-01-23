<?php

use DatabaseSeeder as Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\Image::class, 10)->create();
    }
}
