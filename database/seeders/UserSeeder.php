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
        // User admin untuk testing dan deploy
        $user = User::firstOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('pswd'),
            ]
        );
        
        // Set encrypted password menggunakan method yang benar
        if ($user) {
            $user->setEncryptedPassword('pswd');
            $user->save();
        }
    }
}