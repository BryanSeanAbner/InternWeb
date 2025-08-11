<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User admin yang sudah ada
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('pswd'),
                'plain_password' => 'pswd',
            ]
        );

        // User untuk teman Anda
        User::firstOrCreate(
            ['username' => 'teman1'],
            [
                'password' => Hash::make('password123'),
                'plain_password' => 'password123',
            ]
        );

        // User untuk teman lainnya
        User::firstOrCreate(
            ['username' => 'teman2'],
            [
                'password' => Hash::make('password456'),
                'plain_password' => 'password456',
            ]
        );
    }
}