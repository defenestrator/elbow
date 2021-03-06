<?php

use DatabaseSeeder as Seeder;
use Elbow\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = User::whereEmail('jeremyblc@gmail.com')->first();

        if ($model instanceof Elbow\User) {
            return 'Already Seeded!';
        }
        
        return User::create([
            'name' => 'Jeremy Anderson',
            'email' => 'jeremyblc@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('very very temporary'),
            'remember_token' => Str::random(10)
        ]);
    }
}
