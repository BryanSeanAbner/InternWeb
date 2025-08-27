<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            
            // Personal Information
            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('domisili')->nullable();
            $table->text('alamat_rumah');
            
            // Educational Information
            $table->string('asal_sekolah');
            $table->integer('tahun_angkatan');
            $table->string('nim_nis');
            $table->string('jurusan');
            $table->string('semester');
            
            // Internship Information
            $table->date('tanggal_mulai_magang');
            $table->date('tanggal_selesai_magang');
            $table->string('bidang_minat_magang');
            $table->string('bidang_minat_lainnya')->nullable();
            
            // File Uploads
            $table->string('cv_path')->nullable();
            $table->string('ktp_path')->nullable();
            $table->string('kartu_pelajar_path')->nullable();
            $table->string('surat_magang_path')->nullable();
            $table->string('transkip_nilai_path')->nullable();
            $table->string('form_magang_ntv_path')->nullable();
            $table->string('foto_diri_path')->nullable();
            $table->string('screenshot_instagram_path')->nullable();
            
            // Application Status
            $table->enum('status', [
                'pending',
                'reviewed', 
                'approved',
                'rejected',
                'active',
                'completed'
            ])->default('pending');
            
            $table->text('notes')->nullable();
            
            $table->timestamps();
            
            // Indexes
            $table->index(['status', 'created_at']);
            $table->index('bidang_minat_magang');
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
