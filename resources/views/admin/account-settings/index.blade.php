@extends('layouts.admin')

@php
use Illuminate\Support\Str;
@endphp

<!-- Hidden data for JavaScript -->
<div id="password-data" 
     data-current-password="{{ $currentPassword }}"
     style="display: none;">
</div>

@section('admin-title', 'Pengaturan Akun')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-8">

        <!-- Alert Messages -->
        @if(session('success'))
            <div class="mb-6 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4 shadow-sm">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-check-circle text-green-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-green-800">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-6 bg-gradient-to-r from-red-50 to-pink-50 border border-red-200 rounded-xl p-4 shadow-sm">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-exclamation-triangle text-red-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Terjadi kesalahan</h3>
                        <ul class="mt-2 text-sm text-red-700 space-y-1">
                            @foreach($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="space-y-6">
            
            <!-- Informasi Akun Card -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-600 px-6 py-4">
                    <h2 class="text-xl font-semibold text-white flex items-center">
                        <i class="fa-solid fa-info-circle mr-3"></i>
                        Informasi Akun
                    </h2>
                </div>
                
                <div class="p-6">
                    <!-- Header Row -->
                    <div class="grid grid-cols-3 gap-4 mb-3">
                        <div class="text-center">
                            <span class="font-medium text-gray-700">Username:</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-700">Password:</span>
                        </div>
                        <div class="text-center">
                            <span class="font-medium text-gray-700">Terakhir Update:</span>
                        </div>
                    </div>
                    
                    <!-- Data Row -->
                    <div class="grid grid-cols-3 gap-4 items-center py-3">
                        <div class="text-center">
                            <span class="text-gray-900 font-medium">{{ $user->username }}</span>
                        </div>
                        <div class="text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <span class="text-gray-900" id="password-display">***</span>
                                <button type="button" 
                                        class="text-gray-400 hover:text-gray-600 transition-colors"
                                        onclick="togglePasswordDisplay()"
                                        title="Toggle password visibility">
                                    <i class="fa-solid fa-eye-slash" id="password-toggle-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <span class="text-gray-900">{{ $user->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Forms Row -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                
                <!-- Ubah Username Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 px-6 py-4">
                        <h2 class="text-xl font-semibold text-white flex items-center">
                            <i class="fa-solid fa-user-edit mr-3"></i>
                            Ubah Username
                        </h2>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('admin.account-settings.update-username') }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="username" class="block text-sm font-semibold text-gray-700 mb-3">Username Baru</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fa-solid fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" 
                                           id="username" 
                                           name="username" 
                                           value="{{ old('username', $user->username) }}"
                                           class="block w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                           placeholder="Masukkan username baru"
                                           required>
                                </div>
                                @error('username')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white py-3 px-6 rounded-xl font-semibold hover:from-blue-700 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                <i class="fa-solid fa-save mr-2"></i>
                                Update Username
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Ubah Password Card -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 px-6 py-4">
                        <h2 class="text-xl font-semibold text-white flex items-center">
                            <i class="fa-solid fa-lock mr-3"></i>
                            Ubah Password
                        </h2>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('admin.account-settings.update-password') }}" method="POST" class="space-y-6">
                            @csrf
                            @method('PUT')
                            
                            <!-- Current Password -->
                            <div>
                                <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-3">Password Saat Ini</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fa-solid fa-key text-gray-400"></i>
                                    </div>
                                    <input type="password" 
                                           id="current_password" 
                                           name="current_password" 
                                           class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                                           placeholder="Masukkan password saat ini"
                                           required>
                                    <button type="button" 
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-colors"
                                            onclick="togglePassword('current_password')">
                                        <i class="fa-solid fa-eye-slash" id="current_password_icon"></i>
                                    </button>
                                </div>
                                @error('current_password')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- New Password -->
                            <div>
                                <label for="new_password" class="block text-sm font-semibold text-gray-700 mb-3">Password Baru</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fa-solid fa-lock text-gray-400"></i>
                                    </div>
                                                                         <input type="password" 
                                            id="new_password" 
                                            name="new_password" 
                                            class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                                            placeholder="Masukkan password baru (minimal 8 karakter)"
                                            onkeyup="checkPasswordStrength(); checkPasswordConfirmation()"
                                            required>
                                    <button type="button" 
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-colors"
                                            onclick="togglePassword('new_password')">
                                        <i class="fa-solid fa-eye-slash" id="new_password_icon"></i>
                                    </button>
                                </div>
                                
                                <!-- Password Strength Indicator -->
                                <div class="mt-4 p-4 bg-gray-50 rounded-xl">
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="text-sm font-medium text-gray-700">Kekuatan Password</span>
                                        <span id="password-strength-text" class="text-sm font-semibold text-gray-500">Kosong</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                                        <div id="password-strength-bar" class="h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                                    </div>
                                    <div id="password-requirements" class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs">
                                        <div id="req-length" class="flex items-center">
                                            <i class="fa-solid fa-circle text-gray-300 mr-2"></i>
                                            <span class="text-gray-600">Minimal 8 karakter</span>
                                        </div>
                                        <div id="req-uppercase" class="flex items-center">
                                            <i class="fa-solid fa-circle text-gray-300 mr-2"></i>
                                            <span class="text-gray-600">1 huruf besar</span>
                                        </div>
                                        <div id="req-lowercase" class="flex items-center">
                                            <i class="fa-solid fa-circle text-gray-300 mr-2"></i>
                                            <span class="text-gray-600">1 huruf kecil</span>
                                        </div>
                                        <div id="req-number" class="flex items-center">
                                            <i class="fa-solid fa-circle text-gray-300 mr-2"></i>
                                            <span class="text-gray-600">1 angka</span>
                                        </div>
                                        <div id="req-special" class="flex items-center sm:col-span-2">
                                            <i class="fa-solid fa-circle text-gray-300 mr-2"></i>
                                            <span class="text-gray-600">1 karakter khusus</span>
                                        </div>
                                    </div>
                                </div>
                                @error('new_password')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <i class="fa-solid fa-exclamation-circle mr-1"></i>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                                                         <!-- Confirm Password -->
                             <div>
                                 <label for="new_password_confirmation" class="block text-sm font-semibold text-gray-700 mb-3">Konfirmasi Password Baru</label>
                                 <div class="relative">
                                     <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                         <i class="fa-solid fa-check text-gray-400" id="confirm-check-icon"></i>
                                     </div>
                                     <input type="password" 
                                            id="new_password_confirmation" 
                                            name="new_password_confirmation" 
                                            class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200"
                                            placeholder="Konfirmasi password baru"
                                            onkeyup="checkPasswordConfirmation()"
                                            required>
                                     <button type="button" 
                                             class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-colors"
                                             onclick="togglePassword('new_password_confirmation')">
                                         <i class="fa-solid fa-eye-slash" id="new_password_confirmation_icon"></i>
                                     </button>
                                 </div>
                                 <div id="password-match-message" class="mt-2 text-sm hidden">
                                     <p class="text-green-600 flex items-center">
                                         <i class="fa-solid fa-check-circle mr-1"></i>
                                         Password cocok!
                                     </p>
                                 </div>
                             </div>

                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-green-600 to-emerald-600 text-white py-3 px-6 rounded-xl font-semibold hover:from-green-700 hover:to-emerald-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105">
                                <i class="fa-solid fa-key mr-2"></i>
                                Update Password
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Security Tips Card -->
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-amber-500 to-orange-500 px-6 py-4">
                    <h3 class="text-lg font-semibold text-white flex items-center">
                        <i class="fa-solid fa-shield-alt mr-3"></i>
                        Tips Keamanan
                    </h3>
                </div>
                <div class="p-6">
                    <ul class="grid grid-cols-1 md:grid-cols-1 gap-3 text-sm text-gray-700">
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-green-500 mt-0.5 mr-3 flex-shrink-0"></i>
                            <span>Gunakan password yang kuat dengan kombinasi huruf, angka, dan simbol</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-green-500 mt-0.5 mr-3 flex-shrink-0"></i>
                            <span>Jangan bagikan kredensial login Anda dengan siapapun</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-green-500 mt-0.5 mr-3 flex-shrink-0"></i>
                            <span>Ganti password secara berkala untuk keamanan akun</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa-solid fa-check-circle text-green-500 mt-0.5 mr-3 flex-shrink-0"></i>
                            <span>Logout dari sistem setelah selesai menggunakan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>

<script>
// Password data
let currentPasswordData = '';
let isPasswordVisible = false;

// Initialize password data
document.addEventListener('DOMContentLoaded', function() {
    const passwordDataElement = document.getElementById('password-data');
    if (passwordDataElement) {
        currentPasswordData = passwordDataElement.getAttribute('data-current-password');
    }
});

function togglePasswordDisplay() {
    const passwordDisplay = document.getElementById('password-display');
    const toggleIcon = document.getElementById('password-toggle-icon');
    
    if (!isPasswordVisible) {
        // Show current password (password aktif) - mata terbuka
        if (currentPasswordData && currentPasswordData !== '***') {
            passwordDisplay.textContent = currentPasswordData;
        } else {
            passwordDisplay.textContent = 'Password aktif tersembunyi';
        }
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
        isPasswordVisible = true;
    } else {
        // Hide password - menggunakan *** - mata tertutup
        passwordDisplay.textContent = '***';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
        isPasswordVisible = false;
    }
}

function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(fieldId + '_icon');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}

function checkPasswordStrength() {
    const password = document.getElementById('new_password').value;
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');
    
    // Requirements
    const hasLength = password.length >= 8;
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    
    // Update requirement indicators
    updateRequirement('req-length', hasLength);
    updateRequirement('req-uppercase', hasUppercase);
    updateRequirement('req-lowercase', hasLowercase);
    updateRequirement('req-number', hasNumber);
    updateRequirement('req-special', hasSpecial);
    
    // Calculate strength
    let strength = 0;
    if (hasLength) strength += 20;
    if (hasUppercase) strength += 20;
    if (hasLowercase) strength += 20;
    if (hasNumber) strength += 20;
    if (hasSpecial) strength += 20;
    
    // Update strength bar and text
    strengthBar.style.width = strength + '%';
    
    if (strength === 0) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300';
        strengthText.textContent = 'Kosong';
        strengthText.className = 'text-sm font-medium text-gray-500';
    } else if (strength <= 40) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-red-500';
        strengthText.textContent = 'Lemah';
        strengthText.className = 'text-sm font-medium text-red-500';
    } else if (strength <= 60) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-yellow-500';
        strengthText.textContent = 'Sedang';
        strengthText.className = 'text-sm font-medium text-yellow-600';
    } else if (strength <= 80) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-blue-500';
        strengthText.textContent = 'Kuat';
        strengthText.className = 'text-sm font-medium text-blue-600';
    } else {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-green-500';
        strengthText.textContent = 'Sangat Kuat';
        strengthText.className = 'text-sm font-medium text-green-600';
    }
}

function updateRequirement(elementId, isMet) {
    const element = document.getElementById(elementId);
    const icon = element.querySelector('i');
    
    if (isMet) {
        icon.className = 'fa-solid fa-check text-green-500 mr-2';
        element.className = 'flex items-center text-green-600';
    } else {
        icon.className = 'fa-solid fa-circle text-gray-300 mr-2';
        element.className = 'flex items-center text-gray-600';
    }
}

function checkPasswordConfirmation() {
    const newPassword = document.getElementById('new_password').value;
    const confirmPassword = document.getElementById('new_password_confirmation').value;
    const confirmIcon = document.getElementById('confirm-check-icon');
    const matchMessage = document.getElementById('password-match-message');
    
    if (confirmPassword.length > 0) {
        if (newPassword === confirmPassword) {
            // Password cocok - tampilkan centang hijau
            confirmIcon.className = 'fa-solid fa-check text-green-500';
            matchMessage.classList.remove('hidden');
        } else {
            // Password tidak cocok - tampilkan centang abu-abu
            confirmIcon.className = 'fa-solid fa-check text-gray-400';
            matchMessage.classList.add('hidden');
        }
    } else {
        // Field kosong - tampilkan centang abu-abu
        confirmIcon.className = 'fa-solid fa-check text-gray-400';
        matchMessage.classList.add('hidden');
    }
}
</script>
@endsection
