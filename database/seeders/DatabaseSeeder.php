<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call UserSeeder untuk membuat user admin default
        $this->call(UserSeeder::class);
        
        // $this->call(CategorySeeder::class);
        // \App\Models\Post::factory(10)->create();
        // \App\Models\Testimonial::factory(5)->create();
        
        $this->call(InternshipBenefitSeeder::class);
        $this->call(RequirementSeeder::class);
        $this->call(ApplyStepSeeder::class);
    }
}
