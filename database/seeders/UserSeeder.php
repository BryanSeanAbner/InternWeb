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
        // User admin untuk deploy dan testing
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('pswd'),
                'plain_password' => 'pswd',
            ]
        );
    }
}