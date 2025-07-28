<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class SampleDataSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user admin jika belum ada
        $admin = User::firstOrCreate(
            ['email' => 'adminntv@gmail.com'],
            [
                'name' => 'Admin NTV',
                'username' => 'admin',
                'password' => bcrypt('pswd'),
            ]
        );

        // Buat kategori
        $categories = [
            [
                'name' => 'BIDANG PRODUKSI',
                'description' => 'Program magang untuk bidang produksi video, editing, dan konten kreatif.',
                'color' => '#22c55e',
            ],
            [
                'name' => 'JURNALIS',
                'description' => 'Program magang untuk bidang jurnalistik dan peliputan berita.',
                'color' => '#2563eb',
            ],
            [
                'name' => 'CONTENT CREATOR',
                'description' => 'Program magang untuk bidang pembuatan konten digital dan sosial media.',
                'color' => '#f59e42',
            ],
            [
                'name' => 'VIDEO EDITOR',
                'description' => 'Program magang untuk bidang editing video dan post-production.',
                'color' => '#e11d48',
            ],
            [
                'name' => 'SOCIAL MEDIA',
                'description' => 'Program magang untuk bidang pengelolaan sosial media dan digital marketing.',
                'color' => '#a21caf',
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::firstOrCreate(
                ['name' => $categoryData['name']],
                [
                    'slug' => \Illuminate\Support\Str::slug($categoryData['name']),
                    'description' => $categoryData['description'],
                    'color' => $categoryData['color'],
                ]
            );
        }

        // Ambil kategori yang sudah dibuat
        $produksiCategory = Category::where('name', 'BIDANG PRODUKSI')->first();
        $jurnalisCategory = Category::where('name', 'JURNALIS')->first();
        $contentCreatorCategory = Category::where('name', 'CONTENT CREATOR')->first();

        // Buat post
        $posts = [
            [
                'title' => 'Rumornya Cilla',
                'body' => 'Woah gile sih gokill! Cilla kembali dengan energi yang luar biasa dalam program magang Nusantara TV. Pengalaman magang di bidang produksi memberikan insight yang mendalam tentang dunia broadcasting.',
                'category_id' => $produksiCategory->id,
                'author_id' => $admin->id,
            ],
            [
                'title' => 'Sukses Magang di Bidang Jurnalistik',
                'body' => 'Pengalaman magang di bidang jurnalistik memberikan pembelajaran yang sangat berharga. Mulai dari teknik wawancara hingga penulisan berita yang menarik.',
                'category_id' => $jurnalisCategory->id,
                'author_id' => $admin->id,
            ],
            [
                'title' => 'Kreativitas Tanpa Batas di Content Creation',
                'body' => 'Program magang content creator membuka wawasan baru tentang dunia digital. Belajar membuat konten yang engaging dan viral untuk berbagai platform.',
                'category_id' => $contentCreatorCategory->id,
                'author_id' => $admin->id,
            ],
            [
                'title' => 'Tips Sukses Magang di Nusantara TV',
                'body' => 'Berbagai tips dan trik untuk memaksimalkan pengalaman magang di Nusantara TV. Dari persiapan hingga networking yang efektif.',
                'category_id' => $produksiCategory->id,
                'author_id' => $admin->id,
            ],
            [
                'title' => 'Kisah Inspiratif Alumni Magang',
                'body' => 'Cerita sukses dari alumni program magang Nusantara TV yang kini berkarier di industri broadcasting dan media kreatif.',
                'category_id' => $jurnalisCategory->id,
                'author_id' => $admin->id,
            ],
        ];

        foreach ($posts as $postData) {
            Post::firstOrCreate(
                ['title' => $postData['title']],
                [
                    'slug' => \Illuminate\Support\Str::slug($postData['title']),
                    'body' => $postData['body'],
                    'category_id' => $postData['category_id'],
                    'author_id' => $postData['author_id'],
                ]
            );
        }
    }
} 