<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Coding Challenge',
            'email' => 'admin@test.com',
            'password' => bcrypt('coding-challenge'),
        ]);
    }
}
