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
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-4 md:py-8 animate-fade-in-up">

        <!-- Alert Messages -->
        @if(session('success'))
            <div class="mb-6 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4 shadow-lg animate-fade-in-up">
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
            <div class="mb-6 bg-gradient-to-r from-red-50 to-pink-50 border border-red-200 rounded-xl p-4 shadow-lg animate-fade-in-up">
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

        <div class="space-y-4 md:space-y-6">
            
            <!-- Informasi Akun Card -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.1s;">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-600 px-4 md:px-6 py-4">
                    <h2 class="text-lg md:text-xl font-semibold text-white flex items-center">
                        <i class="fa-solid fa-info-circle mr-3"></i>
                        Informasi Akun
                    </h2>
                </div>
                
                <div class="p-4 md:p-6">
                    <!-- Header Row -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-3">
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
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center py-3">
                        <div class="text-center">
                            <span class="text-gray-900 font-medium">{{ $user->username }}</span>
                        </div>
                        <div class="text-center">
                            <div class="flex items-center justify-center space-x-2">
                                <span class="text-gray-900" id="password-display">***</span>
                                <button type="button" 
                                        class="text-gray-400 hover:text-gray-600 transition-all duration-200 hover:scale-110"
                                        onclick="showPasswordVerification()"
                                        title="Verifikasi password untuk melihat password">
                                    <i class="fa-solid fa-eye-slash" id="password-toggle-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            <span class="text-gray-900 text-sm md:text-base">{{ $user->updated_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Forms Row -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-4 md:gap-6">
                
                <!-- Ubah Username Card -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 px-4 md:px-6 py-4">
                        <h2 class="text-lg md:text-xl font-semibold text-white flex items-center">
                            <i class="fa-solid fa-user-edit mr-3"></i>
                            Ubah Username
                        </h2>
                    </div>
                    <div class="p-4 md:p-6">
                        <form action="{{ route('admin.account-settings.update-username') }}" method="POST" class="space-y-4 md:space-y-6">
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
                                           value="{{ e(old('username', $user->username)) }}"
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
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 px-4 md:px-6 py-4">
                        <h2 class="text-lg md:text-xl font-semibold text-white flex items-center">
                            <i class="fa-solid fa-lock mr-3"></i>
                            Ubah Password
                        </h2>
                    </div>
                    <div class="p-4 md:p-6">
                        <form action="{{ route('admin.account-settings.update-password') }}" method="POST" class="space-y-4 md:space-y-6">
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
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-all duration-200 hover:scale-110"
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
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-all duration-200 hover:scale-110"
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
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition-all duration-200 hover:scale-110"
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
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 overflow-hidden transition-all duration-300 animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="bg-gradient-to-r from-amber-500 to-orange-500 px-4 md:px-6 py-4">
                    <h3 class="text-lg md:text-xl font-semibold text-white flex items-center">
                        <i class="fa-solid fa-shield-alt mr-3"></i>
                        Tips Keamanan
                    </h3>
                </div>
                <div class="p-4 md:p-6">
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

    <!-- Password Verification Modal -->
    <div id="password-verification-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900">🔐 Verifikasi Password</h3>
                    <button type="button" onclick="hidePasswordVerification()" class="text-gray-400 hover:text-gray-600">
                        <i class="fa-solid fa-times text-xl"></i>
                    </button>
                </div>
                
                <p class="text-sm text-gray-600 mb-4">
                    Masukkan password login Anda untuk melihat password yang tersimpan.
                </p>
                
                <form id="verification-form" class="space-y-4">
                    @csrf
                    <div>
                        <label for="verification_password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password Login
                        </label>
                        <input type="password" 
                               id="verification_password" 
                               name="verification_password" 
                               class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                               placeholder="Masukkan password login"
                               required>
                    </div>
                    
                    <div class="flex space-x-3">
                        <button type="button" 
                                onclick="hidePasswordVerification()"
                                class="flex-1 px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition-colors">
                            Batal
                        </button>
                        <button type="submit" 
                                class="flex-1 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Verifikasi
                        </button>
                    </div>
                </form>
                
                <div id="verification-error" class="mt-3 text-sm text-red-600 hidden"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/admin-account-settings.js') }}"></script>
@endsection
