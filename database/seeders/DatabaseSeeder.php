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
        \App\Models\User::factory(3)->create();
        $this->call(CategorySeeder::class);
        \App\Models\Post::factory(10)->create();
        \App\Models\Testimonial::factory(5)->create();
        \App\Models\User::factory()->create([
            'name' => 'Admin NusaTV',
            'username' => 'admin',
            'email' => 'adminntv@gmail.com',
            'password' => bcrypt('pswd'),
        ]);
        $this->call(InternshipBenefitSeeder::class);
        $this->call(RequirementSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ApplyStepSeeder::class);
    }
}
