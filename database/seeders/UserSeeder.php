<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'phone' => '081234567890',
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente sint laboriosam at doloribus doloremque totam.',
            'role' => 'superadmin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'phone' => '081234567890',
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente sint laboriosam at doloribus doloremque totam.',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'phone' => '081234567890',
            'bio' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente sint laboriosam at doloribus doloremque totam.',
            'role' => 'user',
            'password' => Hash::make('password'),
        ]);
    }
}
