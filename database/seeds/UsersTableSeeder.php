<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Montenegro\'s ONE',
            'email' => 'test@email.com',
            'password' => Hash::make('123456')
        ]);
    }
}
