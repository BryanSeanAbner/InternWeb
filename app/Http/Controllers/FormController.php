<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Category;
use App\Services\GoogleSheetsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FormController extends Controller
{
    /**
     * Show the internship application form
     */
    public function show()
    {
        $internshipFields = Category::getInternshipFields();
        return view('form', compact('internshipFields'));
    }

    /**
     * Handle form submission
     */
    public function submit(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:forms,email',
            'no_telepon' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date|before:today',
            'domisili' => 'required|string|max:255',
            'alamat_rumah' => 'required|string',
            'asal_sekolah' => 'required|string|max:255',
            'tahun_angkatan' => 'required|integer|min:2010|max:2030',
            'nim_nis' => 'required|string|max:50',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|string|max:100',
            'tanggal_mulai_magang' => 'required|date',
            'tanggal_selesai_magang' => 'required|date|after_or_equal:tanggal_mulai_magang',
            'bidang_minat_magang' => 'required|string|max:255',
            'bidang_minat_lainnya' => 'nullable|string|max:255',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
            'ktp' => 'nullable|file|mimes:pdf|max:2048',
            'kartu_pelajar' => 'nullable|file|mimes:pdf|max:2048',
            'surat_magang' => 'nullable|file|mimes:pdf|max:2048',
            'transkip_nilai' => 'nullable|file|mimes:pdf|max:2048',
            'form_magang_ntv' => 'nullable|file|mimes:pdf|max:2048',
            'foto_diri' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'screenshot_instagram' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
            'terms' => 'required|accepted',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar sebelumnya',
            'no_telepon.required' => 'Nomor telepon wajib diisi',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi',
            'tanggal_lahir.before' => 'Tanggal lahir tidak boleh di masa depan',
            'domisili.required' => 'Domisili wajib diisi',
            'alamat_rumah.required' => 'Alamat rumah wajib diisi',
            'asal_sekolah.required' => 'Asal sekolah/universitas wajib diisi',
            'tahun_angkatan.required' => 'Tahun angkatan wajib diisi',
            'tahun_angkatan.integer' => 'Tahun angkatan harus berupa angka',
            'tahun_angkatan.min' => 'Tahun angkatan minimal 2010',
            'tahun_angkatan.max' => 'Tahun angkatan maksimal 2030',
            'nim_nis.required' => 'NIM/NIS wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
            'semester.required' => 'Semester wajib diisi',
            'tanggal_mulai_magang.required' => 'Tanggal mulai magang wajib diisi',
            'tanggal_mulai_magang.date' => 'Format tanggal mulai magang tidak valid',
            'tanggal_selesai_magang.required' => 'Tanggal selesai magang wajib diisi',
            'tanggal_selesai_magang.date' => 'Format tanggal selesai magang tidak valid',
            'tanggal_selesai_magang.after_or_equal' => 'Tanggal selesai magang harus sama dengan atau setelah tanggal mulai',
            'bidang_minat_magang.required' => 'Bidang minat magang wajib dipilih',
            'cv.required' => 'CV wajib diupload',
            'cv.file' => 'CV harus berupa file',
            'cv.mimes' => 'CV harus berformat PDF',
            'cv.max' => 'Ukuran CV maksimal 2MB',
            'ktp.required' => 'KTP wajib diupload',
            'ktp.file' => 'KTP harus berupa file',
            'ktp.mimes' => 'KTP harus berformat PDF',
            'ktp.max' => 'Ukuran KTP maksimal 2MB',
            'kartu_pelajar.required' => 'KTM wajib diupload',
            'kartu_pelajar.file' => 'KTM harus berupa file',
            'kartu_pelajar.mimes' => 'KTM harus berformat PDF',
            'kartu_pelajar.max' => 'Ukuran KTM maksimal 2MB',
            'surat_magang.required' => 'Surat magang dari kampus wajib diupload',
            'surat_magang.file' => 'Surat magang dari kampus harus berupa file',
            'surat_magang.mimes' => 'Surat magang dari kampus harus berformat PDF',
            'surat_magang.max' => 'Ukuran surat magang dari kampus maksimal 2MB',
            'transkip_nilai.required' => 'Transkrip nilai wajib diupload',
            'transkip_nilai.file' => 'Transkrip nilai harus berupa file',
            'transkip_nilai.mimes' => 'Transkrip nilai harus berformat PDF',
            'transkip_nilai.max' => 'Ukuran transkrip nilai maksimal 2MB',
            'form_magang_ntv.required' => 'Form Magang NTV wajib diupload',
            'form_magang_ntv.file' => 'Form Magang NTV harus berupa file',
            'form_magang_ntv.mimes' => 'Form Magang NTV harus berformat PDF',
            'form_magang_ntv.max' => 'Ukuran Form Magang NTV maksimal 2MB',
            'foto_diri.required' => 'Foto diri wajib diupload',
            'foto_diri.file' => 'Foto diri harus berupa file',
            'foto_diri.mimes' => 'Foto diri harus berformat JPG atau PNG',
            'foto_diri.max' => 'Ukuran foto diri maksimal 2MB',
            'screenshot_instagram.required' => 'Screenshot Instagram wajib diupload',
            'screenshot_instagram.file' => 'Screenshot Instagram harus berupa file',
            'screenshot_instagram.mimes' => 'Screenshot Instagram harus berformat JPG atau PNG',
            'screenshot_instagram.max' => 'Ukuran screenshot Instagram maksimal 2MB',
            'terms.required' => 'Anda harus menyetujui syarat dan ketentuan',
            'terms.accepted' => 'Anda harus menyetujui syarat dan ketentuan',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Custom validation for file fields - ensure each has either a file or stored data
        $fileFields = ['cv', 'ktp', 'kartu_pelajar', 'surat_magang', 'transkip_nilai', 'form_magang_ntv', 'foto_diri', 'screenshot_instagram'];
        $missingFiles = [];
        
        foreach ($fileFields as $field) {
            $hasFile = $request->hasFile($field) && $request->file($field)->isValid();
            $hasStoredData = $request->has('stored_' . $field);
            
            if (!$hasFile && !$hasStoredData) {
                $missingFiles[] = $field;
            }
        }
        
        if (!empty($missingFiles)) {
            $errorMessages = [];
            foreach ($missingFiles as $field) {
                $errorMessages[$field] = $this->getFileErrorMessage($field);
            }
            
            return redirect()->back()
                ->withErrors($errorMessages)
                ->withInput();
        }

        try {
            // Handle file uploads
            $filePaths = $this->handleFileUploads($request);

            // Create form
            $form = Form::create([
                'nama_lengkap' => $request->nama_lengkap,
                'email' => $request->email,
                'no_telepon' => $request->no_telepon,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'domisili' => $request->domisili,
                'alamat_rumah' => $request->alamat_rumah,
                'asal_sekolah' => $request->asal_sekolah,
                'tahun_angkatan' => $request->tahun_angkatan,
                'nim_nis' => $request->nim_nis,
                'jurusan' => $request->jurusan,
                'semester' => $request->semester,
                'tanggal_mulai_magang' => $request->tanggal_mulai_magang,
                'tanggal_selesai_magang' => $request->tanggal_selesai_magang,
                'bidang_minat_magang' => $request->bidang_minat_magang,
                'bidang_minat_lainnya' => $request->bidang_minat_lainnya,
                'cv_path' => $filePaths['cv'],
                'ktp_path' => $filePaths['ktp'],
                'kartu_pelajar_path' => $filePaths['kartu_pelajar'],
                'surat_magang_path' => $filePaths['surat_magang'],
                'transkip_nilai_path' => $filePaths['transkip_nilai'],
                'form_magang_ntv_path' => $filePaths['form_magang_ntv'],
                'foto_diri_path' => $filePaths['foto_diri'],
                'screenshot_instagram_path' => $filePaths['screenshot_instagram'],
            ]);

            // Send to Google Sheets via API
            $this->sendToGoogleSheets($form);

            return redirect()->back()->with('success', 
                'Pendaftaran magang Anda berhasil dikirim! Tim kami akan menghubungi Anda dalam waktu 3-5 hari kerja untuk informasi selanjutnya.'
            );

        } catch (\Exception $e) {
            // Clean up uploaded files if database insertion fails
            if (isset($filePaths)) {
                $this->cleanupFiles($filePaths);
            }

            return redirect()->back()
                ->withErrors(['error' => 'Terjadi kesalahan saat mengirim pendaftaran. Silakan coba lagi.'])
                ->withInput();
        }
    }

    /**
     * Handle file uploads
     */
    private function handleFileUploads(Request $request)
    {
        $filePaths = [];
        $uploadPath = 'form';

        $files = [
            'cv' => $request->file('cv'),
            'ktp' => $request->file('ktp'),
            'kartu_pelajar' => $request->file('kartu_pelajar'),
            'surat_magang' => $request->file('surat_magang'),
            'transkip_nilai' => $request->file('transkip_nilai'),
            'form_magang_ntv' => $request->file('form_magang_ntv'),
            'foto_diri' => $request->file('foto_diri'),
            'screenshot_instagram' => $request->file('screenshot_instagram'),
        ];

        foreach ($files as $key => $file) {
            // Check if there's a stored file from previous submission
            $storedFileKey = 'stored_' . $key;
            if ($request->has($storedFileKey) && !$file) {
                // Use stored file data
                $storedFileData = $request->input($storedFileKey);
                $filePaths[$key] = $this->saveStoredFile($storedFileData, $key, $uploadPath);
            } elseif ($file && $file->isValid()) {
                // Use newly uploaded file
                $filename = $key . '_' . time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs($uploadPath, $filename, 'public');
                $filePaths[$key] = $path;
            }
        }

        return $filePaths;
    }

    /**
     * Save stored file from base64 data
     */
    private function saveStoredFile($base64Data, $key, $uploadPath)
    {
        // Remove data URL prefix if present
        $base64Data = preg_replace('/^data:[^;]+;base64,/', '', $base64Data);
        
        // Decode base64 data
        $fileData = base64_decode($base64Data);
        
        if ($fileData === false) {
            throw new \Exception('Invalid file data');
        }
        
        // Determine file extension based on key
        $extension = $this->getFileExtension($key);
        
        // Generate filename
        $filename = $key . '_' . time() . '_' . Str::random(10) . '.' . $extension;
        
        // Save file to storage
        $path = $uploadPath . '/' . $filename;
        Storage::disk('public')->put($path, $fileData);
        
        return $path;
    }

    /**
     * Get file extension based on field key
     */
    private function getFileExtension($key)
    {
        $imageFields = ['foto_diri', 'screenshot_instagram'];
        $pdfFields = ['cv', 'ktp', 'kartu_pelajar', 'surat_magang', 'transkip_nilai', 'form_magang_ntv'];
        
        if (in_array($key, $imageFields)) {
            return 'jpg'; // Default to jpg for images
        } elseif (in_array($key, $pdfFields)) {
            return 'pdf';
        }
        
        return 'bin'; // Default fallback
    }

    /**
     * Get error message for file field
     */
    private function getFileErrorMessage($field)
    {
        $messages = [
            'cv' => 'CV wajib diupload',
            'ktp' => 'KTP wajib diupload',
            'kartu_pelajar' => 'KTM wajib diupload',
            'surat_magang' => 'Surat magang dari kampus wajib diupload',
            'transkip_nilai' => 'Transkrip nilai wajib diupload',
            'form_magang_ntv' => 'Form Magang NTV wajib diupload',
            'foto_diri' => 'Foto diri wajib diupload',
            'screenshot_instagram' => 'Screenshot Instagram wajib diupload',
        ];
        
        return $messages[$field] ?? 'File wajib diupload';
    }

    /**
     * Clean up uploaded files
     */
    private function cleanupFiles($filePaths)
    {
        foreach ($filePaths as $path) {
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }
    }

    /**
     * Send data to Google Sheets via API
     */
    private function sendToGoogleSheets($form)
    {
        try {
            $googleSheetsService = new GoogleSheetsService();
            
            if (!$googleSheetsService->isConfigured()) {
                \Log::warning('Google Sheets service not properly configured');
                return;
            }

            // Generate public URLs for all uploaded files
            $fileUrls = [
                'cv_url' => $this->getFileUrl($form->cv_path),
                'ktp_url' => $this->getFileUrl($form->ktp_path),
                'kartu_pelajar_url' => $this->getFileUrl($form->kartu_pelajar_path),
                'surat_magang_url' => $this->getFileUrl($form->surat_magang_path),
                'transkip_nilai_url' => $this->getFileUrl($form->transkip_nilai_path),
                'form_magang_ntv_url' => $this->getFileUrl($form->form_magang_ntv_path),
                'foto_diri_url' => $this->getFileUrl($form->foto_diri_path),
                'screenshot_instagram_url' => $this->getFileUrl($form->screenshot_instagram_path),
            ];

            $data = [
                'id' => $form->id,
                'nama_lengkap' => $form->nama_lengkap,
                'email' => $form->email,
                'no_telepon' => $form->no_telepon,
                'jenis_kelamin' => $form->jenis_kelamin,
                'tempat_lahir' => $form->tempat_lahir,
                'tanggal_lahir' => $form->tanggal_lahir->format('Y-m-d'),
                'domisili' => $form->domisili,
                'alamat_rumah' => $form->alamat_rumah,
                'asal_sekolah' => $form->asal_sekolah,
                'tahun_angkatan' => $form->tahun_angkatan,
                'nim_nis' => $form->nim_nis,
                'jurusan' => $form->jurusan,
                'semester' => $form->semester,
                'tanggal_mulai_magang' => $form->tanggal_mulai_magang->format('Y-m-d'),
                'tanggal_selesai_magang' => $form->tanggal_selesai_magang->format('Y-m-d'),
                'bidang_minat_magang' => $form->bidang_minat_magang,
                'bidang_minat_lainnya' => $form->bidang_minat_lainnya,
                'tanggal_daftar' => $form->created_at->format('Y-m-d'),
                'waktu_daftar' => $form->created_at->format('H:i:s'),
                // File URLs
                'cv_url' => $fileUrls['cv_url'],
                'ktp_url' => $fileUrls['ktp_url'],
                'kartu_pelajar_url' => $fileUrls['kartu_pelajar_url'],
                'surat_magang_url' => $fileUrls['surat_magang_url'],
                'transkip_nilai_url' => $fileUrls['transkip_nilai_url'],
                'form_magang_ntv_url' => $fileUrls['form_magang_ntv_url'],
                'foto_diri_url' => $fileUrls['foto_diri_url'],
                'screenshot_instagram_url' => $fileUrls['screenshot_instagram_url'],
            ];

            $success = $googleSheetsService->addRow($data);

            if ($success) {
                \Log::info('Data sent to Google Sheets successfully', ['form_id' => $form->id]);
            } else {
                \Log::error('Failed to send data to Google Sheets', ['form_id' => $form->id]);
            }

        } catch (\Exception $e) {
            \Log::error('Error sending data to Google Sheets', [
                'form_id' => $form->id,
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Get public URL for uploaded file
     */
    private function getFileUrl($filePath)
    {
        if (!$filePath) {
            return null;
        }

        try {
            // Use the public file access route for Google Sheets integration
            return url('/public-files/' . $filePath);
        } catch (\Exception $e) {
            \Log::error('Error generating file URL', [
                'file_path' => $filePath,
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }

}
