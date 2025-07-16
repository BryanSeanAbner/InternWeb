<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'icon' => '🎓',
                'title' => 'Status Mahasiswa Aktif',
                'description' => 'Terdaftar sebagai mahasiswa aktif di program studi terkait pada universitas atau perguruan tinggi terakreditasi, disertai surat pengantar dari kampus.',
            ],
            [
                'icon' => '📄',
                'title' => 'CV',
                'description' => 'Berisi informasi pribadi, pendidikan, pengalaman organisasi atau proyek, keterampilan, dll.',
            ],
            [
                'icon' => '🪪',
                'title' => 'KTP / Identitas Diri',
                'description' => 'Sebagai syarat administrasi.',
            ],
            [
                'icon' => '📝',
                'title' => 'Transkrip Nilai',
                'description' => 'Untuk melihat nilai akademik atau mata kuliah yang relevan.',
            ],
            [
                'icon' => '🗂️',
                'title' => 'Portfolio (Optional)',
                'description' => 'Contoh hasil karya, proyek, atau coding project yang pernah dibuat',
            ],
        ];
        foreach ($data as $item) {
            Requirement::create($item);
        }
    }
}
