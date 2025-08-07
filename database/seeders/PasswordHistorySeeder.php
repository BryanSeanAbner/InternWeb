<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PasswordHistory;
use Illuminate\Support\Facades\Hash;

class PasswordHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user pertama (admin)
        $user = User::first();
        
        if ($user) {
            // Tambahkan beberapa password history untuk contoh
            $passwords = ['password123', 'admin123', 'secret456'];
            
            foreach ($passwords as $password) {
                PasswordHistory::create([
                    'user_id' => $user->id,
                    'password_hash' => Hash::make($password),
                    'created_at' => now()->subDays(rand(1, 30)),
                    'updated_at' => now()->subDays(rand(1, 30)),
                ]);
            }
        }
    }
}
