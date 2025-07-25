<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InternshipBenefit;

class InternshipBenefitSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'icon' => '🎯',
                'title' => 'Bangun Keterampilan Profesional',
                'description' => 'Dapatkan pengalaman langsung dengan peralatan, perangkat lunak, dan teknik penyiaran profesional yang digunakan dalam industri media'
            ],
            [
                'icon' => '🤝',
                'title' => 'Bangun Jaringan Profesional',
                'description' => 'Terhubung dengan para profesional industri, jurnalis berpengalaman, dan profesional kreatif yang dapat memandu karier Anda.'
            ],
            [
                'icon' => '💼',
                'title' => 'Berkontribusi dalam Proyek Nyata',
                'description' => 'Bekerja pada produksi TV aktual, segmen berita, dan kampanye media yang menjangkau ribuan pemirsa.'
            ],
            [
                'icon' => '🚀',
                'title' => 'Meningkatkan Rasa Percaya Diri',
                'description' => 'Mengembangkan kemandirian, keterampilan kepemimpinan, dan kepercayaan diri profesional dalam lingkungan belajar yang mendukung.'
            ],
        ];
        foreach ($data as $item) {
            InternshipBenefit::firstOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}
