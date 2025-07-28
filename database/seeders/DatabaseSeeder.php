<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(CategorySeeder::class);
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Testimonial::factory(5)->create();
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Admin NTV',
                'email' => 'adminntv@gmail.com',
                'password' => bcrypt('pswd'),
            ]
        );
        $this->call(SampleDataSeeder::class);
        $this->call(InternshipBenefitSeeder::class);
        $this->call(RequirementSeeder::class);
        $this->call(ApplyStepSeeder::class);
    }
}
