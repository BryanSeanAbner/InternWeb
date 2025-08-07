@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-blue-100 py-8 px-4 relative overflow-hidden">
    <!-- Floating Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-32 h-32 bg-blue-200 bg-opacity-20 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-indigo-300 bg-opacity-30 rounded-full animate-bounce"></div>
        <div class="absolute bottom-40 left-1/4 w-40 h-40 bg-blue-300 bg-opacity-10 rounded-full animate-pulse"></div>
        <div class="absolute top-1/3 right-1/4 w-20 h-20 bg-white bg-opacity-30 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 right-10 w-36 h-36 bg-blue-400 bg-opacity-15 rounded-full animate-pulse"></div>
    </div>

    <div class="max-w-3xl mx-auto relative z-10">
        <!-- Enhanced Logo and Brand Header -->
        <div class="text-center mb-12 transform hover:scale-105 transition-transform duration-500">
            <div class="relative inline-block mb-6">
                <div class="absolute inset-0 bg-blue-600 rounded-full blur-2xl opacity-30 animate-pulse"></div>
                <div class="relative inline-flex items-center justify-center w-42 h-42 bg-white bg-opacity-95 backdrop-blur-sm rounded-full shadow-2xl border-4 border-blue-100">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Nusantara TV" class="w-36 h-36 rounded-full shadow-lg" />
                </div>
            </div>
            <h1 class="text-6xl lg:text-7xl font-black bg-gradient-to-r from-blue-700 via-blue-600 to-indigo-700 bg-clip-text text-transparent mb-4 tracking-tight drop-shadow-sm">NUSANTARA TV</h1>
            <p class="text-blue-700 text-2xl font-bold mb-4 drop-shadow-sm">Televisi Digital Nasional Indonesia</p>
            <div class="flex items-center justify-center space-x-4 mb-8">
                <div class="h-1 w-20 bg-gradient-to-r from-transparent via-blue-700 to-transparent rounded-full"></div>
                <div class="h-3 w-3 bg-blue-600 rounded-full animate-pulse"></div>
                <div class="h-1 w-20 bg-gradient-to-r from-transparent via-blue-700 to-transparent rounded-full"></div>
            </div>
            <div class="inline-flex items-center bg-white bg-opacity-90 backdrop-blur-sm px-8 py-4 rounded-full shadow-xl border border-blue-200 hover:shadow-2xl transition-all duration-300">
                <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"/>
                </svg>
                <span class="text-blue-700 font-bold text-lg">Program Magang Profesional</span>
            </div>
        </div>

        <!-- Enhanced Main Form Card -->
        <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-3xl shadow-2xl overflow-hidden border border-white border-opacity-50 hover:shadow-3xl transition-all duration-500">
            <!-- Enhanced Header Section -->
            <div class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-800 px-8 py-16 text-center relative overflow-hidden">
                <!-- Animated Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent animate-pulse"></div>
                </div>
                
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-white bg-opacity-20 backdrop-blur-sm rounded-full mb-6 shadow-2xl hover:scale-110 transition-transform duration-300">
                        <svg class="w-12 h-12 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-black text-white mb-4 drop-shadow-lg">Form Pendaftaran Magang</h2>
                    <p class="text-white text-xl lg:text-2xl font-semibold opacity-95 mb-3">Bergabunglah bersama keluarga besar Nusantara TV</p>
                    <p class="text-white text-base lg:text-lg opacity-80 max-w-3xl mx-auto leading-relaxed">
                        Wujudkan impian berkarir di industri penyiaran digital terdepan Indonesia. Silakan lengkapi data diri Anda dengan benar dan lengkap untuk memulai perjalanan profesional yang menginspirasi.
                    </p>
                </div>
            </div>


            <!-- Form Content -->
            <div class="px-8 lg:px-12 py-12">
                <!-- Success Alert -->
                @if(session('success'))
                <div class="mb-10 bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 rounded-2xl p-8 shadow-lg transform hover:scale-105 transition-transform duration-300">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="text-green-800 font-bold text-xl mb-2">🎉 Pendaftaran Berhasil!</p>
                            <p class="text-green-700 text-base">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Error Alert -->
                @if($errors->any())
                <div class="mb-10 bg-gradient-to-r from-red-50 to-pink-50 border-l-4 border-red-500 rounded-2xl p-8 shadow-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-6">
                            <p class="text-red-800 font-bold text-xl mb-3">⚠️ Terdapat kesalahan pada form:</p>
                            <ul class="text-red-700 text-base space-y-2">
                                @foreach($errors->all() as $error)
                                <li class="flex items-center">
                                    <span class="w-2 h-2 bg-red-500 rounded-full mr-3"></span>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Form -->
                <form action="{{ route('form.submit') }}" method="POST" class="space-y-12">
                    @csrf
                    
                    <!-- Personal Information Section -->
                    <div class="relative">
                        <div class="flex items-center border-l-4 border-blue-700 pl-8 mb-10 bg-gradient-to-r from-blue-50 to-transparent py-6 rounded-r-2xl">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mr-6 shadow-xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2">Informasi Pribadi</h3>
                                <p class="text-gray-600 text-lg">Pastikan data yang Anda masukkan sesuai dengan identitas resmi</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Column Input Fields -->
                    <div class="space-y-10">
                        <!-- Nama Lengkap -->
                        <div class="space-y-4 group">
                            <label for="nama_lengkap" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    Nama Lengkap
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="nama_lengkap" 
                                    name="nama_lengkap" 
                                    value="{{ old('nama_lengkap') }}"
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('nama_lengkap') border-red-500 bg-red-50 @enderror"
                                    placeholder="Masukkan nama lengkap sesuai KTP"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('nama_lengkap')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="space-y-4 group">
                            <label for="email" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Alamat Email
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('email') border-red-500 bg-red-50 @enderror"
                                    placeholder="contoh@email.com"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- No. Telepon -->
                        <div class="space-y-4 group">
                            <label for="no_telepon" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    Nomor Telepon
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="no_telepon" 
                                    name="no_telepon" 
                                    value="{{ old('no_telepon') }}"
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('no_telepon') border-red-500 bg-red-50 @enderror"
                                    placeholder="08xxxxxxxxxx"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 shadow-sm">
                                <p class="text-blue-700 text-base flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    Nomor WhatsApp aktif untuk komunikasi lebih lanjut
                                </p>
                            </div>
                            @error('no_telepon')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="space-y-4 group">
                            <label class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                        </svg>
                                    </div>
                                    Jenis Kelamin
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="bg-white border-2 border-gray-300 rounded-xl p-6 hover:border-blue-500 transition-all duration-300 shadow-sm hover:shadow-md">
                                <div class="space-y-4">
                                    <label class="flex items-center cursor-pointer group/radio">
                                        <input 
                                            type="radio" 
                                            name="jenis_kelamin" 
                                            value="Laki-laki"
                                            class="w-5 h-5 text-blue-700 border-2 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}
                                        >
                                        <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-blue-700 transition-colors duration-200">Laki - Laki</span>
                                    </label>
                                    <label class="flex items-center cursor-pointer group/radio">
                                        <input 
                                            type="radio" 
                                            name="jenis_kelamin" 
                                            value="Perempuan"
                                            class="w-5 h-5 text-blue-700 border-2 border-gray-300 focus:ring-blue-500 focus:ring-2"
                                            {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}
                                        >
                                        <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-blue-700 transition-colors duration-200">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="space-y-4 group">
                            <label for="tempat_lahir" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    Tempat Lahir
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="tempat_lahir" 
                                    name="tempat_lahir" 
                                    value="{{ old('tempat_lahir') }}"
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('tempat_lahir') border-red-500 bg-red-50 @enderror"
                                    placeholder="Jawaban Anda"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('tempat_lahir')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="space-y-4 group">
                            <label for="tanggal_lahir" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Tanggal Lahir
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="space-y-2">
                                <p class="text-gray-600 text-base">Tanggal</p>
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_lahir" 
                                        name="tanggal_lahir" 
                                        value="{{ old('tanggal_lahir') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('tanggal_lahir') border-red-500 bg-red-50 @enderror"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            @error('tanggal_lahir')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                    <!-- Domisili -->
                        <div class="space-y-4 group">
                            <label for="domisili" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                        </svg>
                                    </div>
                                    Domisili
                                    <span class="text-gray-400 text-lg font-normal ml-3 bg-gray-100 px-3 py-1 rounded-full">(Opsional)</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="domisili" 
                                    name="domisili" 
                                    value="{{ old('domisili') }}"
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400"
                                    placeholder="Kota/Kabupaten tempat tinggal saat ini"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                    <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Rumah -->
                        <div class="space-y-4 group">
                            <label for="alamat_rumah" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    Alamat Rumah
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <textarea 
                                    id="alamat_rumah" 
                                    name="alamat_rumah" 
                                    rows="4"
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('alamat_rumah') border-red-500 bg-red-50 @enderror"
                                    placeholder="Masukkan alamat lengkap sesuai KTP"
                                >{{ old('alamat_rumah') }}</textarea>
                            </div>
                            @error('alamat_rumah')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Educational Information Section -->
                    <div class="relative">
                        <div class="flex items-center border-l-4 border-blue-700 pl-8 mb-10 bg-gradient-to-r from-blue-50 to-transparent py-6 rounded-r-2xl">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mr-6 shadow-xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2">Informasi Pendidikan</h3>
                                <p class="text-gray-600 text-lg">Data pendidikan dan status akademik saat ini</p>
                            </div>
                        </div>
                    </div>
       
                    <div class="space-y-10">
                        <!-- Asal Sekolah/Universitas  -->
                        <div class="space-y-4 group">
                            <label for="asal_sekolah" class="block text-blue-700 font-bold text-xl">
                                <span class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    Asal Sekolah/Universitas
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                    <input 
                                        type="text" 
                                        id="asal_sekolah" 
                                        name="asal_sekolah" 
                                        value="{{ old('asal_sekolah') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('asal_sekolah') border-red-500 bg-red-50 @enderror"
                                        placeholder="Nama lengkap sekolah/universitas"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('asal_sekolah')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            
                            <div class="space-y-4 group">
                                <label for="tahun_angkatan" class="block text-blue-700 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        Tahun Angkatan
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                    <input 
                                        type="number" 
                                        id="tahun_angkatan" 
                                        name="tahun_angkatan" 
                                        value="{{ old('tahun_angkatan') }}"
                                        min="2010" 
                                        max="2030"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('tahun_angkatan') border-red-500 bg-red-50 @enderror"
                                        placeholder="contoh: 2023"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('tahun_angkatan')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- NIM/NIS -->
                            <div class="space-y-4 group">
                                <label for="nim_nis" class="block text-blue-700 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                            </svg>
                                        </div>
                                        Nomor Induk Mahasiswa / Siswa
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        id="nim_nis" 
                                        name="nim_nis" 
                                        value="{{ old('nim_nis') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('nim_nis') border-red-500 bg-red-50 @enderror"
                                        placeholder="NIM untuk mahasiswa atau NIS untuk siswa"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('nim_nis')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- Jurusan -->
                            <div class="space-y-4 group">
                                <label for="jurusan" class="block text-blue-700 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                            </svg>
                                        </div>
                                        Jurusan
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        id="jurusan" 
                                        name="jurusan" 
                                        value="{{ old('jurusan') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('jurusan') border-red-500 bg-red-50 @enderror"
                                        placeholder="Program studi atau jurusan"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('jurusan')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- Semester -->
                            <div class="space-y-4 group">
                                <label for="semester" class="block text-blue-700 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                            </svg>
                                        </div>
                                        Semester
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        id="semester" 
                                        name="semester" 
                                        value="{{ old('semester') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('semester') border-red-500 bg-red-50 @enderror"
                                        placeholder="semester yang sedang di tempuh"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('semester')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                        
                    <!-- Internship Information Section -->
                <div class="max-w-3xl mx-auto px-12">
                    <div class="relative mt-16">
                       <div class="flex items-center border-l-4 border-blue-700 pl-8 mb-10 bg-gradient-to-r from-blue-50 to-transparent py-6 rounded-r-2xl">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mr-6 shadow-xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-purple-600 mb-2">Informasi Magang</h3>
                                <p class="text-gray-600 text-lg">Detail periode dan bidang magang yang diminati</p>
                            </div>
                        </div>

                        <div class="space-y-10">
                            <!-- Tanggal Mulai Magang -->
                            <div class="space-y-4 group">
                                <label for="tanggal_mulai_magang" class="block text-purple-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                        Tanggal Mulai Magang
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_mulai_magang" 
                                        name="tanggal_mulai_magang" 
                                        value="{{ old('tanggal_mulai_magang') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-purple-500 group-hover:border-purple-400 @error('tanggal_mulai_magang') border-red-500 bg-red-50 @enderror"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('tanggal_mulai_magang')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- Tanggal Selesai Magang -->
                            <div class="space-y-4 group">
                                <label for="tanggal_selesai_magang" class="block text-purple-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                        Tanggal Selesai Magang
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_selesai_magang" 
                                        name="tanggal_selesai_magang" 
                                        value="{{ old('tanggal_selesai_magang') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-purple-100 focus:border-purple-600 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-purple-500 group-hover:border-purple-400 @error('tanggal_selesai_magang') border-red-500 bg-red-50 @enderror"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                </div>
                                @error('tanggal_selesai_magang')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- Bidang Minat Magang -->
                            <div class="space-y-4 group">
                                <label class="block text-purple-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                            </svg>
                                        </div>
                                        Bidang Minat Magang
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                        <span class="text-gray-500 text-base font-normal ml-3">(akan disesuaikan dengan kuota divisi yang tersedia)</span>
                                    </span>
                                </label>
                                <div class="bg-white border-2 border-gray-300 rounded-xl p-6 hover:border-purple-500 transition-all duration-300 shadow-sm hover:shadow-md">
                                    <div class="grid gap-4">
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Social Media Editing"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Social Media Editing' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Social Media Editing</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Master Control Room (MCR)"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Master Control Room (MCR)' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Master Control Room (MCR)</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Produksi Program TV"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Produksi Program TV' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Produksi Program TV</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Support Jadwal Program TV"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Support Jadwal Program TV' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Support Jadwal Program TV</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Research and Development (R & D) Program TV"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Research and Development (R & D) Program TV' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Research and Development (R & D) Program TV</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Support Marketing"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Support Marketing' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Support Marketing</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Repoter Sosialmedia Live Streaming"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Repoter Sosialmedia Live Streaming' ? 'checked' : '' }}
                                            >
                                            <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Repoter Sosialmedia Live Streaming</span>
                                        </label>
                                        <label class="flex items-start cursor-pointer group/radio">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Lainnya"
                                                class="w-5 h-5 text-purple-600 border-2 border-gray-300 focus:ring-purple-500 focus:ring-2 mt-1"
                                                {{ old('bidang_minat_magang') == 'Lainnya' ? 'checked' : '' }}
                                            >
                                            <div class="ml-3 flex-1">
                                                <span class="text-gray-700 text-lg font-medium group-hover/radio:text-purple-600 transition-colors duration-200">Yang lain:</span>
                                                <input 
                                                    type="text" 
                                                    name="bidang_minat_lainnya" 
                                                    value="{{ old('bidang_minat_lainnya') }}"
                                                    class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 text-base"
                                                    placeholder="Sebutkan bidang minat lainnya..."
                                                >
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @error('bidang_minat_magang')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information Section -->

                    <!-- Additional Information Section -->
                    <div class="relative mt-16">
                        <div class="flex items-center border-l-4 border-blue-300 pl-8 mb-10 bg-gradient-to-r from-blue-50 to-transparent py-6 rounded-r-2xl">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-400 rounded-full flex items-center justify-center mr-6 shadow-xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2">Informasi Tambahan</h3>
                                <p class="text-gray-600 text-lg">Informasi ini akan membantu kami memberikan layanan yang lebih baik</p>
                            </div>
                        </div>
                    </div>

                    <!-- Alasan Mendaftar -->
                    <div class="space-y-4">
                        <label for="alasan_mendaftar" class="block text-blue-700 font-bold text-xl">
                            <span class="flex items-center">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                    <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                                    </svg>
                                </div>
                                Alasan Mendaftar
                                <span class="text-gray-400 text-lg font-normal ml-3 bg-gray-100 px-3 py-1 rounded-full">(Opsional)</span>
                            </span>
                        </label>
                        <div class="relative">
                            <textarea 
                                id="alasan_mendaftar" 
                                name="alasan_mendaftar" 
                                rows="6"
                                class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 resize-vertical shadow-sm hover:shadow-md hover:border-blue-500"
                                placeholder="Ceritakan motivasi dan alasan Anda bergabung dengan Nusantara TV..."
                            >{{ old('alasan_mendaftar') }}</textarea>
                        </div>
                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 shadow-sm">
                            <p class="text-gray-600 text-base flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                Minimal 10 karakter - Maksimal 500 karakter
                            </p>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-2xl p-8 mt-12 shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start space-x-4">
                            <input 
                                type="checkbox" 
                                id="terms" 
                                name="terms" 
                                class="mt-2 w-6 h-6 text-blue-700 border-2 border-gray-300 rounded-lg focus:ring-blue-500 focus:ring-2 shadow-sm"
                                required
                            >
                            <div class="flex-1">
                                <label for="terms" class="text-blue-700 font-bold text-lg cursor-pointer">
                                    Saya menyetujui <a href="#" class="text-blue-700 underline hover:text-blue-800 font-black">Syarat dan Ketentuan</a> 
                                    serta <a href="#" class="text-blue-700 underline hover:text-blue-800 font-black">Kebijakan Privasi</a> Nusantara TV
                                </label>
                                <p class="text-gray-600 text-base mt-2 leading-relaxed">
                                    Dengan mendaftar, Anda setuju bahwa data pribadi Anda akan digunakan sesuai dengan kebijakan privasi kami untuk keperluan proses seleksi dan komunikasi program magang.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Submit Button -->
                    <div class="pt-12 text-center">
                        <button 
                            type="submit" 
                            class="bg-gradient-to-r from-blue-700 via-blue-600 to-blue-700 hover:from-blue-800 hover:via-blue-700 hover:to-blue-800 text-white font-black px-20 py-6 rounded-2xl text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-3xl focus:outline-none focus:ring-4 focus:ring-blue-300 active:scale-95 relative overflow-hidden"
                        >
                            <!-- Button glow effect -->
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transition-opacity duration-300 animate-pulse"></div>
                            <span class="flex items-center justify-center relative z-10">
                                <svg class="w-7 h-7 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Kirim Pendaftaran
                            </span>
                        </button>
                        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 mt-8 shadow-sm">
                            <p class="text-blue-700 text-base font-medium flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                                Proses pendaftaran membutuhkan waktu 1-2 hari kerja untuk verifikasin
                            </p>
                        </div>
                    </div>

                    <!-- Required Fields Note -->
                    <div class="pt-8 border-t-2 border-gray-200">
                        <div class="flex items-center justify-center space-x-8 text-base">
                            <div class="flex items-center text-blue-700 bg-blue-50 px-4 py-2 rounded-full shadow-sm">
                                <span class="text-red-500 mr-2 text-xl">*</span>
                                <span class="font-bold">Field wajib diisi</span>
                            </div>
                            <div class="w-2 h-2 bg-gray-300 rounded-full"></div>
                            <div class="flex items-center text-gray-600 bg-gray-50 px-4 py-2 rounded-full shadow-sm">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="font-medium">Data Anda Aman</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Enhanced Footer Information -->
        <div class="mt-12 text-center space-y-6">
            <div class="bg-white bg-opacity-90 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-blue-100 hover:shadow-2xl transition-all duration-300">
                <h4 class="text-blue-700 font-black text-2xl mb-6 flex items-center justify-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Butuh Bantuan?
                </h4>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="flex flex-col items-center text-blue-700 bg-blue-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-lg">Email</span>
                        <span class="text-base">info@nusantaratv.com</span>
                    </div>
                    <div class="flex flex-col items-center text-blue-700 bg-blue-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-lg">Telepon</span>
                        <span class="text-base">(021) 1234-5678</span>
                    </div>
                    <div class="flex flex-col items-center text-blue-700 bg-blue-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-lg">Support</span>
                        <span class="text-base">24/7 Customer Support</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-6 px-8 rounded-2xl shadow-xl">
                <p class="text-lg font-bold flex items-center justify-center">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                    </svg>
                    © 2025 Nusantara TV - Televisi Digital Nasional Indonesia
                </p>
                <p class="text-blue-200 text-base mt-2 opacity-90">
                    Membangun masa depan penyiaran digital Indonesia bersama generasi terbaik bangsa
                </p>
            </div>
        </div>
    </div>
</div>
@endsection