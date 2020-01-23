<?php

use DatabaseSeeder as Seeder;

class ContactFormMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Elbow\ContactFormMessage::class, 10)->create();
    }
}
