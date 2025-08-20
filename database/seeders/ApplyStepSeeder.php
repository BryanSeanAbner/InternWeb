<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplyStep;

class ApplyStepSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'step_number' => 1,
                'title' => 'Siapkan Dokumen',
                'description' => 'Kumpulkan seluruh dokumen yang dibutuhkan, termasuk CV, surat pengantar dari kampus, KTP, dan transkrip nilai.',
            ],
            [
                'step_number' => 2,
                'title' => 'Isi Formulir Online Dibawah ini',
                'description' => 'Lengkapi formulir pendaftaran magang secara online dengan data yang valid dan akurat.',
            ],
            [
                'step_number' => 3,
                'title' => 'Kirimkan Aplikasi Anda',
                'description' => 'Setelah formulir terisi lengkap, kirimkan aplikasi Anda dan tunggu konfirmasi dari kami.',
            ],
            [
                'step_number' => 4,
                'title' => 'Ikuti Proses Seleksi',
                'description' => 'Apabila lolos tahap administrasi, Anda akan diundang untuk mengikuti wawancara.',
            ],
            [
                'step_number' => 5,
                'title' => 'Dapatkan Konfirmasi & Mulai Magang',
                'description' => 'Jika dinyatakan diterima, Anda akan menerima surat konfirmasi resmi.',
                'button_text' => 'Daftar Sekarang',
                'button_link' => 'https://docs.google.com/forms/d/e/1FAIpQLScXcauxm-smmbrqfRwOQHNDjhvKc1-ZBac2Xm4dP0pFaknCtw/viewform',
            ],
        ];
        foreach ($data as $item) {
            ApplyStep::create($item);
        }
    }
}
