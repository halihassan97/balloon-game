<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin User',
            'email' => 'admin@thornandballoons.com.co',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}

