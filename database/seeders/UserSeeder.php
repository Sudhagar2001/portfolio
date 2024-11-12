<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // For hashing passwords
use App\Models\User; // Ensure to import the User model

class UserSeeder extends Seeder
{
    public function run()
    {
        

        // You can create other users as needed
        User::create([
            'username' => 'Sudhagar',
            'password' => Hash::make('Sudhagar@2001'),
            'role' => 'admin',
        ]);

       
    }
}
