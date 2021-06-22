<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $admin = User::create([
            'name' => 'vk',
            'email' => 'vk@gmail.fr',
            'password' => Hash::make('vk@gmail.fr'),
            'role' => 'admin'
        ]);

        $User = User::create([
            'name' => 'user',
            'email' => 'user@gmail.fr',
            'password' => Hash::make('user@gmail.fr'),
            'role' => 'user'
        ]);

        
    }
}