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
                'icon' => '📇',
                'title' => 'Kartu Tanda Mahasiswa (KTM)',
                'description' => 'Bukti resmi bahwa kamu adalah mahasiswa aktif dari kampus atau sekolah asal.',
            ],
            [
                'icon' => '📝',
                'title' => 'Transkrip Nilai',
                'description' => 'Untuk melihat nilai akademik atau mata kuliah yang relevan.',
            ],
            [
                'icon' => '📑',
                'title' => 'Surat Keterangan Magang dari Kampus/ Sekolah',
                'description' => 'Dokumen yang menyatakan bahwa kamu mendapat izin dan rekomendasi untuk mengikuti kegiatan magang.',
            ],
            [
                'icon' => '📋',
                'title' => 'Formulir Magang dari NTV',
                'description' => 'Formulir resmi yang disediakan oleh NTV untuk diisi sebagai bagian dari proses administrasi magang.',
            ],
            [   
                'icon' => '🧑‍💼',
                'title' => 'Foto Diri',
                'description' => 'Foto formal terbaru yang digunakan untuk keperluan identifikasi dan administrasi selama masa magang.',
            ],
        ];
        foreach ($data as $item) {
            Requirement::firstOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }
}
