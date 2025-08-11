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
        User::firstOrCreate(
            ['username' => 'teman'],
            [
                'password' => Hash::make('Pswd@123'),
                'plain_password' => 'Pswd@123',
            ]
        );
    }
}
