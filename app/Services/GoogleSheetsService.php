<?php

namespace App\Services;

use Google\Client as GoogleClient;
use Google\Service\Sheets as GoogleSheets;
use Google\Service\Sheets\ValueRange;
use Illuminate\Support\Facades\Log;

class GoogleSheetsService
{
    private $client;
    private $service;
    private $spreadsheetId;

    public function __construct()
    {
        $this->spreadsheetId = config('services.google_sheets.spreadsheet_id');
        $credentialsPath = config('services.google_sheets.credentials_path');
        
        if (!config('services.google_sheets.enabled')) {
            Log::warning('Google Sheets integration is disabled');
            return;
        }

        try {
            // Ensure credentials path is absolute
            if (!file_exists($credentialsPath)) {
                // Try relative path from storage/app/
                $relativePath = storage_path('app/credentials.json');
                if (file_exists($relativePath)) {
                    $credentialsPath = $relativePath;
                } else {
                    throw new \Exception("Credentials file not found at: {$credentialsPath} or {$relativePath}");
                }
            }
            
            $this->client = new GoogleClient();
            $this->client->setAuthConfig($credentialsPath);
            $this->client->setScopes([GoogleSheets::SPREADSHEETS]);
            
            $this->service = new GoogleSheets($this->client);
            
        } catch (\Exception $e) {
            Log::error('Failed to initialize Google Sheets service', [
                'error' => $e->getMessage(),
                'credentials_path' => $credentialsPath
            ]);
        }
    }

    /**
     * Add a new row to Google Sheets
     */
    public function addRow($data)
    {
        if (!$this->service || !$this->spreadsheetId) {
            Log::warning('Google Sheets service not properly configured');
            return false;
        }

        try {
            // Prepare the data row
            $row = [
                $data['id'],
                $data['nama_lengkap'],
                $data['email'],
                $data['no_telepon'],
                $data['jenis_kelamin'],
                $data['tempat_lahir'],
                $data['tanggal_lahir'],
                $data['domisili'] ?? '',
                $data['alamat_rumah'],
                $data['asal_sekolah'],
                $data['tahun_angkatan'],
                $data['nim_nis'],
                $data['jurusan'],
                $data['semester'],
                $data['tanggal_mulai_magang'],
                $data['tanggal_selesai_magang'],
                $data['bidang_minat_magang'],
                $data['bidang_minat_lainnya'] ?? '',
                $data['tanggal_daftar'],
                $data['waktu_daftar'],
                $data['cv_url'] ?? '',
                $data['ktp_url'] ?? '',
                $data['kartu_pelajar_url'] ?? '',
                $data['surat_magang_url'] ?? '',
                $data['transkip_nilai_url'] ?? '',
                $data['form_magang_ntv_url'] ?? '',
                $data['foto_diri_url'] ?? '',
                $data['screenshot_instagram_url'] ?? '',
            ];

            $valueRange = new ValueRange();
            $valueRange->setValues([$row]);

            $this->service->spreadsheets_values->append(
                $this->spreadsheetId,
                'Sheet1!A:AC',
                $valueRange,
                ['valueInputOption' => 'RAW']
            );

            Log::info('Data successfully added to Google Sheets', [
                'form_id' => $data['id'],
                'spreadsheet_id' => $this->spreadsheetId
            ]);

            return true;

        } catch (\Exception $e) {
            Log::error('Failed to add data to Google Sheets', [
                'form_id' => $data['id'] ?? 'unknown',
                'error' => $e->getMessage(),
                'spreadsheet_id' => $this->spreadsheetId
            ]);
            
            return false;
        }
    }

    /**
     * Get all data from Google Sheets
     */
    public function getAllData()
    {
        if (!$this->service || !$this->spreadsheetId) {
            return [];
        }

        try {
            $response = $this->service->spreadsheets_values->get(
                $this->spreadsheetId,
                'Sheet1!A:AC'
            );

            return $response->getValues() ?? [];

        } catch (\Exception $e) {
            Log::error('Failed to get data from Google Sheets', [
                'error' => $e->getMessage(),
                'spreadsheet_id' => $this->spreadsheetId
            ]);
            
            return [];
        }
    }

    /**
     * Get Google Client instance
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Check if service is properly configured
     */
    public function isConfigured()
    {
        return $this->service && $this->spreadsheetId && config('services.google_sheets.enabled');
    }
}
