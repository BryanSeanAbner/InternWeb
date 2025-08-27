<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_telepon',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'domisili',
        'alamat_rumah',
        'asal_sekolah',
        'tahun_angkatan',
        'nim_nis',
        'jurusan',
        'semester',
        'tanggal_mulai_magang',
        'tanggal_selesai_magang',
        'bidang_minat_magang',
        'bidang_minat_lainnya',
        'cv_path',
        'ktp_path',
        'kartu_pelajar_path',
        'surat_magang_path',
        'transkip_nilai_path',
        'form_magang_ntv_path',
        'foto_diri_path',
        'screenshot_instagram_path',
        'notes'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_mulai_magang' => 'date',
        'tanggal_selesai_magang' => 'date',
        'tahun_angkatan' => 'integer',
    ];



    public function scopeByBidangMinat($query, $bidangMinat)
    {
        return $query->where('bidang_minat_magang', $bidangMinat);
    }

    public function scopeByDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('created_at', [$startDate, $endDate]);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('nama_lengkap', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%")
              ->orWhere('asal_sekolah', 'like', "%{$search}%")
              ->orWhere('jurusan', 'like', "%{$search}%");
        });
    }

    // File handling methods
    public function getCvUrlAttribute()
    {
        return $this->cv_path ? url('/public-files/' . $this->cv_path) : null;
    }

    public function getKtpUrlAttribute()
    {
        return $this->ktp_path ? url('/public-files/' . $this->ktp_path) : null;
    }

    public function getKartuPelajarUrlAttribute()
    {
        return $this->kartu_pelajar_path ? url('/public-files/' . $this->kartu_pelajar_path) : null;
    }

    public function getSuratMagangUrlAttribute()
    {
        return $this->surat_magang_path ? url('/public-files/' . $this->surat_magang_path) : null;
    }

    public function getTranskipNilaiUrlAttribute()
    {
        return $this->transkip_nilai_path ? url('/public-files/' . $this->transkip_nilai_path) : null;
    }

    public function getFormMagangNtvUrlAttribute()
    {
        return $this->form_magang_ntv_path ? url('/public-files/' . $this->form_magang_ntv_path) : null;
    }

    public function getFotoDiriUrlAttribute()
    {
        return $this->foto_diri_path ? url('/public-files/' . $this->foto_diri_path) : null;
    }

    public function getScreenshotInstagramUrlAttribute()
    {
        return $this->screenshot_instagram_path ? url('/public-files/' . $this->screenshot_instagram_path) : null;
    }

    public function hasFile($fileType)
    {
        $filePath = $this->{$fileType . '_path'};
        return $filePath && \Storage::disk('public')->exists($filePath);
    }

    public function getFileSize($fileType)
    {
        $filePath = $this->{$fileType . '_path'};
        if ($filePath && \Storage::disk('public')->exists($filePath)) {
            return \Storage::disk('public')->size($filePath);
        }
        return 0;
    }
}
