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
<<<<<<< HEAD
        User::firstOrCreate(
            ['username' => 'teman'],
            [
                'password' => Hash::make('Pswd@123'),
                'plain_password' => 'Pswd@123',
            ]
        );
=======
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
>>>>>>> b3f6ad5096182b69fcf358f8a6020cb46068e845
    }
}