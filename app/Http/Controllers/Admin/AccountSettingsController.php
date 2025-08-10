<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class AccountSettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Ambil password aktif dari database atau set default
        $currentPassword = $user->plain_password ?: '***';
            
        return view('admin.account-settings.index', compact('user', 'currentPassword'));
    }

    public function updateUsername(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        // Update username di database
        $user->update([
            'username' => $request->username,
        ]);

        // Refresh user data dari database
        $user->refresh();

        // Update session dengan data user yang baru
        Auth::login($user);

        return redirect()->back()->with('success', 'Username berhasil diperbarui!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
            'plain_password' => $request->new_password, // Simpan password plain text
        ]);

        return redirect()->back()->with('success', 'Password berhasil diperbarui!');
    }
}
