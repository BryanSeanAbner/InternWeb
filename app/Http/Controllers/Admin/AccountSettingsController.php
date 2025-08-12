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
        
        // Password tidak langsung ditampilkan, hanya placeholder
        $currentPassword = '***';
            
        return view('admin.account-settings.index', compact('user', 'currentPassword'));
    }

    /**
     * Verify password and return decrypted password
     */
    public function verifyPassword(Request $request)
    {
        $request->validate([
            'verification_password' => 'required|string',
        ]);

        $user = Auth::user();

        // Verify password using bcrypt hash
        if (!Hash::check($request->verification_password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Password verifikasi tidak sesuai'
            ], 401);
        }

        // If verification successful, decrypt and return password
        $decryptedPassword = $user->getDecryptedPassword();
        
        return response()->json([
            'success' => true,
            'password' => $decryptedPassword
        ]);
    }

    public function updateUsername(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z0-9\s]+$/', // Hanya alfanumerik dan spasi
                Rule::unique('users')->ignore($user->id),
            ],
        ], [
            'username.regex' => 'Username hanya boleh mengandung huruf, angka, dan spasi.',
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
            'new_password' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/',
        ], [
            'new_password.regex' => 'Password harus mengandung minimal 1 huruf kecil, 1 huruf besar, 1 angka, dan 1 karakter khusus.',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
        }

        // Prevent using the same password
        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->back()->withErrors(['new_password' => 'Password baru tidak boleh sama dengan password saat ini.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);
        
        // Update encrypted password
        $user->setEncryptedPassword($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diperbarui!');
    }
}
