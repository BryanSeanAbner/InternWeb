<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password as PasswordRules;

class AccountController extends Controller
{
    public function index(Request $request = null)
    {
        $user = Auth::user();
        
        // Coba ambil password dari session terlebih dahulu
        $savedPassword = session('saved_password');
        
        // Jika tidak ada di session, gunakan dots sebagai default
        if (!$savedPassword) {
            $savedPassword = '••••••••';
        }
        
        return view('admin.account.index', compact('savedPassword'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', PasswordRules::defaults()],
        ], [
            'current_password.required' => 'Password saat ini wajib diisi.',
            'current_password.current_password' => 'Password saat ini tidak sesuai.',
            'password.required' => 'Password baru wajib diisi.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.mixed' => 'Password harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
            'password.letters' => 'Password harus mengandung setidaknya satu huruf.',
            'password.numbers' => 'Password harus mengandung setidaknya satu angka.',
            'password.symbols' => 'Password harus mengandung setidaknya satu simbol.',
        ]);

        $user = Auth::user();
        
        // Simpan password lama ke history sebelum mengupdate
        $user->addPasswordToHistory($request->current_password);
        
        $user->password = Hash::make($request->password);
        $user->save();

        // Save the new password to session for display
        session(['saved_password' => $request->password]);
        session()->forget('current_typed_password');

        return redirect()->route('admin.account.index')
            ->with('success', 'Password berhasil diubah!');
    }

    public function changeUsername(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'username' => [
                'required', 
                'string', 
                'min:3', 
                'max:50', 
                'regex:/^[a-zA-Z0-9_]+$/'
            ],
        ], [
            'username.required' => 'Username baru wajib diisi.',
            'username.string' => 'Username harus berupa teks.',
            'username.min' => 'Username minimal 3 karakter.',
            'username.max' => 'Username maksimal 50 karakter.',
            'username.regex' => 'Username hanya boleh menggunakan huruf, angka, dan underscore (_).',
        ]);

        $user->name = $request->username;
        $user->save();

        return redirect()->route('admin.account.index')
            ->with('success', 'Username berhasil diubah!');
    }
} 