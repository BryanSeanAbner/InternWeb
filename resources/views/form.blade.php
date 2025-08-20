@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100 py-8 px-4 relative overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-blue-100 rounded-full opacity-30 -translate-x-48 -translate-y-48 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200 rounded-full opacity-20 translate-x-48 translate-y-48 blur-3xl"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <!-- Logo Section - Separated from main container -->
        <div class="text-center mb-8">
            <div class="flex items-center justify-center mb-6">
                <div class="bg-white rounded-3xl p-6 shadow-2xl border border-gray-200 hover:scale-105 transition-all duration-300">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo Nusantara TV" class="w-48 h-48 object-contain drop-shadow-xl" />
                </div>
            </div>
        </div>

        <!-- Professional Header Information -->
        <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-3xl shadow-2xl overflow-hidden border border-white border-opacity-50 mb-8">
            <!-- Header Section without Logo -->
            <div class="bg-gradient-to-br from-blue-700 via-blue-600 to-blue-800 px-8 py-8 text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-0 w-32 h-32 border border-white rounded-full"></div>
                    <div class="absolute top-10 right-10 w-20 h-20 border border-white rounded-full"></div>
                    <div class="absolute bottom-0 left-1/4 w-16 h-16 border border-white rounded-full"></div>
                </div>
                
                <h1 class="text-3xl lg:text-4xl font-black text-white mb-2 tracking-tight">
                    Biodata Intership NusantaraTV
                </h1>
                
                <!-- Enhanced Typography -->
                <div class="space-y-6 relative z-10 mt-8">
                    <h1 class="text-4xl lg:text-5xl font-black text-white mb-4 tracking-tight leading-tight">
                        Form Pendaftaran Magang
                    </h1>
                    <div class="w-24 h-1 bg-white mx-auto rounded-full opacity-80 mb-6"></div>
                    <p class="text-white text-xl font-semibold mb-4 tracking-wide">
                        Bergabunglah bersama keluarga besar Nusantara TV
                    </p>
                    <p class="text-white text-lg opacity-95 max-w-3xl mx-auto leading-relaxed font-medium">
                        Wujudkan impian berkarir di industri penyiaran digital terdepan Indonesia. Silakan lengkapi data diri Anda dengan benar dan lengkap untuk memulai perjalanan profesional yang menginspirasi.
                    </p>
                </div>
<<<<<<< HEAD
=======
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Form Pendaftaran Magang</h2>
                <p class="text-white text-lg font-medium mb-3">Bergabunglah bersama keluarga besar Nusantara TV</p>
                <p class="text-white text-base opacity-90 max-w-2xl mx-auto leading-relaxed">
                        Wujudkan impian berkarir di industri penyiaran digital terdepan Indonesia. Silakan lengkapi data diri Anda dengan benar dan lengkap untuk memulai perjalanan profesional yang menginspirasi.
                    </p>
>>>>>>> b3f6ad5096182b69fcf358f8a6020cb46068e845
            </div>

            <!-- Information Content -->
            <div class="px-8 lg:px-12 py-8">
                <!-- Important Notice -->
                <div class="mb-8 bg-gradient-to-r from-yellow-50 to-amber-50 border-2 border-yellow-200 rounded-2xl p-6 shadow-lg">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-amber-500 rounded-full flex items-center justify-center shadow-xl">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-yellow-800 font-black text-lg mb-2">SILAKAN DI ISI TERLEBIH DAHULU LINK DI BAWAH INI :</p>
                        </div>
                    </div>
                </div>

                <!-- Google Drive Link -->
                <div class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-2xl p-6 shadow-lg">
                    <div class="space-y-4">
                        <h3 class="text-blue-800 font-black text-xl mb-3">LINK FROM PERMOHONAN MAGANG NTV</h3>
                        <div class="flex items-center space-x-3 bg-white rounded-xl p-4 shadow-md border border-blue-100">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center shadow-lg">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1">
                                <a href="https://drive.google.com/file/d/1OJOaU0mXrpgFkx8gD4253zXLDCa63IaT/view" 
                                   target="_blank" 
                                   class="text-blue-700 hover:text-blue-900 font-bold text-lg break-all hover:underline transition-colors duration-300">
                                    https://drive.google.com/file/d/1OJOaU0mXrpgFkx8gD4253zXLDCa63IaT/view
                                </a>
                            </div>
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="mb-12 bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-6 shadow-lg relative z-20">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-green-800 font-bold text-lg">BISA MENGHUBUNGI :</p>
                                <p class="text-green-700 font-bold text-xl">magang.nusantaratv@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl p-4 border border-green-100 shadow-md">
                            <p class="text-green-800 font-bold text-lg leading-relaxed">
                                <span class="text-red-600 font-black">CATATAN :</span> 
                                PESERTA MAGANG AKAN DI HUBUNGI TIM HR BILA KUOTA MAGANG TERSEDIA TERIMAKASIH.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separator Section -->
        <div class="max-w-4xl mx-auto relative z-10 mb-8">
            <div class="flex items-center justify-center">
                <div class="flex-grow border-t-2 border-gray-200"></div>
                <div class="mx-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-700 to-blue-800 rounded-full flex items-center justify-center shadow-xl">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                </div>
                <div class="flex-grow border-t-2 border-gray-200"></div>
            </div>
        </div>

        <!-- Form Content Section -->
        <div class="max-w-4xl mx-auto relative z-10">
            <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-3xl shadow-2xl overflow-hidden border border-white border-opacity-50">
                <!-- Form Content with Enhanced Spacing -->
                <div class="px-8 lg:px-16 py-16">
                    <!-- Success Alert -->
                    @if(session('success'))
                    <div class="mb-12 bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-200 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center shadow-xl">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-6">
                                <p class="text-green-800 font-black text-xl mb-2">Pendaftaran Berhasil!</p>
                                <p class="text-green-700 text-lg font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Error Alert -->
                    @if($errors->any())
                    <div class="mb-12 bg-gradient-to-r from-red-50 to-rose-50 border-2 border-red-200 rounded-2xl p-8 shadow-lg">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-full flex items-center justify-center shadow-xl">
                                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-6">
                                <p class="text-red-800 font-black text-xl mb-3">Terdapat kesalahan pada form:</p>
                                <ul class="text-red-700 text-lg space-y-2 font-medium">
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
                    <form action="{{ route('form.submit') }}" method="POST" class="space-y-16">
                        @csrf
                    
                    <!-- Personal Information Section -->
                    <div class="mb-12">
                        <div class="flex items-center border-l-8 border-blue-700 pl-8 mb-12 bg-gradient-to-r from-blue-50 via-blue-25 to-transparent py-8 rounded-r-2xl shadow-sm">
                            <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-br from-blue-700 to-blue-800 rounded-2xl flex items-center justify-center mr-6 shadow-2xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2 tracking-tight">Informasi Pribadi</h3>
                                <p class="text-gray-600 text-lg font-medium">Pastikan data yang Anda masukkan sesuai dengan identitas resmi</p>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Input Fields -->
                    <div class="space-y-12">
                        <!-- Nama Lengkap -->
                        <div class="space-y-5 group">
                            <label for="nama_lengkap" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                        </svg>
                                    </div>
                                    Nama Lengkap
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="nama_lengkap" 
                                    name="nama_lengkap" 
                                    value="{{ old('nama_lengkap') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('nama_lengkap') border-red-500 bg-red-50 @enderror"
                                    placeholder="Masukkan nama lengkap sesuai KTP"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('nama_lengkap')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="space-y-5 group">
                            <label for="email" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Alamat Email
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('email') border-red-500 bg-red-50 @enderror"
                                    placeholder="contoh@email.com"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('email')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- No. Telepon -->
                        <div class="space-y-5 group">
                            <label for="no_telepon" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                    </div>
                                    Nomor Telepon
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="no_telepon" 
                                    name="no_telepon" 
                                    value="{{ old('no_telepon') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('no_telepon') border-red-500 bg-red-50 @enderror"
                                    placeholder="08xxxxxxxxxx"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="bg-gradient-to-r from-blue-50 to-blue-100 border-2 border-blue-200 rounded-2xl p-6 shadow-lg">
                                <p class="text-blue-700 text-lg flex items-center font-semibold">
                                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                    </svg>
                                    Nomor WhatsApp aktif untuk komunikasi lebih lanjut
                                </p>
                            </div>
                            @error('no_telepon')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="space-y-5 group">
                            <label class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                        </svg>
                                    </div>
                                    Jenis Kelamin
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <div class="space-y-6">
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="jenis_kelamin" 
                                            value="Laki-laki"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Laki - Laki</span>
                                    </label>
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="jenis_kelamin" 
                                            value="Perempuan"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('jenis_kelamin') == 'Perempuan' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Perempuan</span>
                                    </label>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="space-y-5 group">
                            <label for="tempat_lahir" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    Tempat Lahir
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="tempat_lahir" 
                                    name="tempat_lahir" 
                                    value="{{ old('tempat_lahir') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('tempat_lahir') border-red-500 bg-red-50 @enderror"
                                    placeholder="Jawaban Anda"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('tempat_lahir')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="space-y-5 group">
                            <label for="tanggal_lahir" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Tanggal Lahir
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="space-y-3">
                                <p class="text-gray-600 text-lg font-semibold">Tanggal</p>
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_lahir" 
                                        name="tanggal_lahir" 
                                        value="{{ old('tanggal_lahir') }}"
                                        class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('tanggal_lahir') border-red-500 bg-red-50 @enderror"
                                    >
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    </div>
                                </div>
                            </div>
                            @error('tanggal_lahir')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Domisili -->
                        <div class="space-y-5 group">
                            <label for="domisili" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                        </svg>
                                    </div>
                                    Domisili
                                    <span class="text-gray-400 text-lg font-bold ml-4 bg-gray-100 px-4 py-2 rounded-full shadow-sm">(Opsional)</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="domisili" 
                                    name="domisili" 
                                    value="{{ old('domisili') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium"
                                    placeholder="Kota/Kabupaten tempat tinggal saat ini"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat Rumah -->
                        <div class="space-y-5 group">
                            <label for="alamat_rumah" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    Alamat Rumah
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <textarea 
                                    id="alamat_rumah" 
                                    name="alamat_rumah" 
                                    rows="4"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 resize-vertical shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('alamat_rumah') border-red-500 bg-red-50 @enderror"
                                    placeholder="Masukkan alamat lengkap sesuai KTP"
                                >{{ old('alamat_rumah') }}</textarea>
                            </div>
                            @error('alamat_rumah')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>

                    <!-- Educational Information Section -->
                    <div class="relative mt-20">
                        <div class="flex items-center border-l-8 border-blue-700 pl-8 mb-12 bg-gradient-to-r from-blue-50 via-blue-25 to-transparent py-8 rounded-r-2xl shadow-sm">
                            <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-br from-blue-700 to-blue-800 rounded-2xl flex items-center justify-center mr-6 shadow-2xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2 tracking-tight">Informasi Pendidikan</h3>
                                <p class="text-gray-600 text-lg font-medium">Data pendidikan dan status akademik saat ini</p>
                            </div>
                        </div>
                    </div>
       
                    <div class="space-y-12">
                        <!-- Asal Sekolah/Universitas  -->
                        <div class="space-y-5 group">
                            <label for="asal_sekolah" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    Asal Sekolah/Universitas
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
<<<<<<< HEAD
                                <input 
                                    type="text" 
                                    id="asal_sekolah" 
                                    name="asal_sekolah" 
                                    value="{{ old('asal_sekolah') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('asal_sekolah') border-red-500 bg-red-50 @enderror"
                                    placeholder="Nama lengkap sekolah/universitas"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
=======
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
                                        <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                            </svg>
                                        </div>
                                        Semester
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="relative">
                                <select 
                                        id="semester" 
                                        name="semester" 
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('semester') border-red-500 bg-red-50 @enderror"
                                >
                                    <option value="">Pilih semester</option>
                                    <option value="Semester 1" {{ old('semester') == 'Semester 1' ? 'selected' : '' }}>Semester 1</option>
                                    <option value="Semester 2" {{ old('semester') == 'Semester 2' ? 'selected' : '' }}>Semester 2</option>
                                    <option value="Semester 3" {{ old('semester') == 'Semester 3' ? 'selected' : '' }}>Semester 3</option>
                                    <option value="Semester 4" {{ old('semester') == 'Semester 4' ? 'selected' : '' }}>Semester 4</option>
                                    <option value="Semester 5" {{ old('semester') == 'Semester 5' ? 'selected' : '' }}>Semester 5</option>
                                    <option value="Semester 6" {{ old('semester') == 'Semester 6' ? 'selected' : '' }}>Semester 6</option>
                                    <option value="Semester 7" {{ old('semester') == 'Semester 7' ? 'selected' : '' }}>Semester 7</option>
                                    <option value="Semester 8" {{ old('semester') == 'Semester 8' ? 'selected' : '' }}>Semester 8</option>
                                    <option value="Lulus" {{ old('semester') == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                                </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-5">
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                        </svg>
                                    </div>
>>>>>>> b3f6ad5096182b69fcf358f8a6020cb46068e845
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
<<<<<<< HEAD
                            @error('asal_sekolah')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tahun Angkatan -->
                        <div class="space-y-5 group">
                            <label for="tahun_angkatan" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Tahun Angkatan
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
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
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('tahun_angkatan') border-red-500 bg-red-50 @enderror"
                                    placeholder="contoh: 2023"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('tahun_angkatan')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
=======
>>>>>>> b3f6ad5096182b69fcf358f8a6020cb46068e845
                        </div>

                        <!-- NIM/NIS -->
                        <div class="space-y-5 group">
                            <label for="nim_nis" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                        </svg>
                                    </div>
                                    Nomor Induk Mahasiswa / Siswa
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="nim_nis" 
                                    name="nim_nis" 
                                    value="{{ old('nim_nis') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('nim_nis') border-red-500 bg-red-50 @enderror"
                                    placeholder="NIM untuk mahasiswa atau NIS untuk siswa"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('nim_nis')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Jurusan -->
                        <div class="space-y-5 group">
                            <label for="jurusan" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                        </svg>
                                    </div>
                                    Jurusan
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="jurusan" 
                                    name="jurusan" 
                                    value="{{ old('jurusan') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('jurusan') border-red-500 bg-red-50 @enderror"
                                    placeholder="Program studi atau jurusan"
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('jurusan')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Semester -->
                        <div class="space-y-5 group">
                            <label for="semester" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                        </svg>
                                    </div>
                                    Semester
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="semester" 
                                    name="semester" 
                                    value="{{ old('semester') }}"
                                    class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('semester') border-red-500 bg-red-50 @enderror"
                                    placeholder="Semester yang sedang ditempuh "
                                >
                                <div class="absolute inset-y-0 right-0 flex items-center pr-6">
                                    <svg class="w-8 h-8 text-gray-400 group-focus-within:text-green-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4"/>
                                    </svg>
                                </div>
                            </div>
                            @error('semester')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                                            <!-- Internship Information Section -->
                    <div class="relative mt-20">
                        <div class="flex items-center border-l-8 border-blue-700 pl-8 mb-12 bg-gradient-to-r from-blue-50 via-blue-25 to-transparent py-8 rounded-r-2xl shadow-sm">
                            <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-br from-blue-700 to-blue-800 rounded-2xl flex items-center justify-center mr-6 shadow-2xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 00-2 2H6a2 2 0 00-2-2V4M8 8v1a4 4 0 008 0V8"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2 tracking-tight">Informasi Magang</h3>
                                <p class="text-gray-600 text-lg font-medium">Periode dan bidang minat magang yang dipilih</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-12">
                        <!-- Tanggal Mulai Magang -->
                        <div class="space-y-5 group">
                            <label for="tanggal_mulai" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Tanggal Mulai Magang
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="space-y-3">
                                <p class="text-gray-600 text-lg font-semibold">Contoh: 22-10-2030 s/d 21-01-2031</p>
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_mulai" 
                                        name="tanggal_mulai" 
                                        value="{{ old('tanggal_mulai') }}"
                                        class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('tanggal_mulai') border-red-500 bg-red-50 @enderror"
                                    >
                                </div>
                            </div>
                            @error('tanggal_mulai')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Tanggal Selesai Magang -->
                        <div class="space-y-5 group">
                            <label for="tanggal_selesai" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                    Tanggal Selesai Magang
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="space-y-3">
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_selesai" 
                                        name="tanggal_selesai" 
                                        value="{{ old('tanggal_selesai') }}"
                                        class="w-full px-8 py-7 border-3 border-gray-300 rounded-2xl focus:ring-6 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-xl placeholder-gray-400 shadow-lg hover:shadow-xl hover:border-blue-500 group-hover:border-blue-400 font-medium @error('tanggal_selesai') border-red-500 bg-red-50 @enderror"
                                    >
                                </div>
                            </div>
                            @error('tanggal_selesai')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Bidang Minat Magang -->
                        <div class="space-y-5 group">
                            <label class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                        </svg>
                                    </div>
                                    Bidang Minat Magang
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">(akan di sesuaikan dengan kuota divisi yang tersedia)</p>
                            
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <div class="space-y-6">
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Sosial Media Editing"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Sosial Media Editing' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Sosial Media Editing</span>
                                    </label>
                                    
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Master Control Room (MCR)"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Master Control Room (MCR)' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Master Control Room (MCR)</span>
                                    </label>
                                    
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Produksi Program TV"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Produksi Program TV' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Produksi Program TV</span>
                                    </label>
                                    
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Support Jadwal Program TV"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Support Jadwal Program TV' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Support Jadwal Program TV</span>
                                    </label>
                                    
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Research and Development (R & D) Program TV"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Research and Development (R & D) Program TV' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Research and Development (R & D) Program TV</span>
                                    </label>
                                    
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Support Marketing"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Support Marketing' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Support Marketing</span>
                                    </label>
                                    
                                    <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                        <input 
                                            type="radio" 
                                            name="bidang_minat" 
                                            value="Reporter Sosialmedia Live Streaming"
                                            class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                            {{ old('bidang_minat') == 'Reporter Sosialmedia Live Streaming' ? 'checked' : '' }}
                                        >
                                        <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Reporter Sosialmedia Live Streaming</span>
                                    </label>
                                    
                                    <div class="space-y-4">
                                        <label class="flex items-center cursor-pointer group/radio p-4 rounded-xl hover:bg-blue-50 transition-colors duration-200">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat" 
                                                value="Lainnya"
                                                class="w-6 h-6 text-blue-700 border-3 border-gray-300 focus:ring-blue-500 focus:ring-4"
                                                {{ old('bidang_minat') == 'Lainnya' ? 'checked' : '' }}
                                                onchange="toggleOtherField(this)"
                                            >
                                            <span class="ml-4 text-gray-700 text-xl font-bold group-hover/radio:text-blue-700 transition-colors duration-200">Yang lain:</span>
                                        </label>
                                        <div id="other_field" class="ml-10 {{ old('bidang_minat') == 'Lainnya' ? '' : 'hidden' }}">
                                            <input 
                                                type="text" 
                                                name="bidang_minat_lainnya" 
                                                value="{{ old('bidang_minat_lainnya') }}"
                                                class="w-full px-6 py-4 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all duration-300 text-lg placeholder-gray-400"
                                                placeholder="Sebutkan bidang minat lainnya"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @error('bidang_minat')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Document Upload Section -->
                    <div class="relative mt-20">
                        <div class="flex items-center border-l-8 border-blue-700 pl-8 mb-12 bg-gradient-to-r from-blue-50 via-blue-25 to-transparent py-8 rounded-r-2xl shadow-sm">
                            <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-br from-blue-700 to-blue-800 rounded-2xl flex items-center justify-center mr-6 shadow-2xl hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-blue-700 mb-2 tracking-tight">Upload Dokumen</h3>
                                <p class="text-gray-600 text-lg font-medium">Lampirkan dokumen pendukung yang diperlukan</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-12">
                        <!-- CV Upload -->
                        <div class="space-y-5 group">
                            <label for="cv" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    CV
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">Upload maksimum 5 file yang didukung: PDF, document, drawing, atau image. Maks 100 MB per file.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="cv" 
                                    name="cv[]" 
                                    multiple
                                    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif"
                                    class="hidden"
                                    onchange="handleFileSelect(this, 'cv-preview')"
                                >
                                <label for="cv" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="cv-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="cv-files" class="space-y-2"></div>
                                </div>
                            </div>
                            @error('cv')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- KTP Upload -->
                        <div class="space-y-5 group">
                            <label for="ktp" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V4a2 2 0 114 0v2m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                        </svg>
                                    </div>
                                    Kartu Tanda Penduduk (KTP)
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">*bila belum punya KTP isi dengan Kartu Pelajar/Mahasiswa</p>
                            <p class="text-gray-600 text-lg font-medium">Upload maksimum 5 file yang didukung: PDF atau drawing. Maks 10 MB per file.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="ktp" 
                                    name="ktp[]" 
                                    multiple
                                    accept=".pdf,.jpg,.jpeg,.png"
                                    class="hidden"
                                    onchange="handleFileSelect(this, 'ktp-preview')"
                                >
                                <label for="ktp" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="ktp-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="ktp-files" class="space-y-2"></div>
                                </div>
                            </div>
                            @error('ktp')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Kartu Mahasiswa/Pelajar Upload -->
                        <div class="space-y-5 group">
                            <label for="kartu_mahasiswa" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                        </svg>
                                    </div>
                                    Kartu Tanda Mahasiswa / Kartu Pelajar
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">Upload 1 file yang didukung: PDF atau drawing. Maks 10 MB.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="kartu_mahasiswa" 
                                    name="kartu_mahasiswa" 
                                    accept=".pdf,.jpg,.jpeg,.png"
                                    class="hidden"
                                    onchange="handleSingleFileSelect(this, 'kartu-preview')"
                                >
                                <label for="kartu_mahasiswa" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="kartu-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="kartu-file" class="bg-blue-50 p-3 rounded-lg border border-blue-200"></div>
                                </div>
                            </div>
                            @error('kartu_mahasiswa')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Surat Keterangan Magang Upload -->
                        <div class="space-y-5 group">
                            <label for="surat_magang" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    Surat Keterangan Magang Yang Di Berikan Dari Kampus / Sekolah
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">Upload 1 file yang didukung: PDF. Maks 10 MB.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="surat_magang" 
                                    name="surat_magang" 
                                    accept=".pdf"
                                    class="hidden"
                                    onchange="handleSingleFileSelect(this, 'surat-preview')"
                                >
                                <label for="surat_magang" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="surat-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="surat-file" class="bg-blue-50 p-3 rounded-lg border border-blue-200"></div>
                                </div>
                            </div>
                            @error('surat_magang')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Transkrip Nilai Upload -->
                        <div class="space-y-5 group">
                            <label for="transkrip" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                                        </svg>
                                    </div>
                                    Transkrip Nilai Terakhir
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">Upload 1 file yang didukung: PDF. Maks 10 MB.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="transkrip" 
                                    name="transkrip" 
                                    accept=".pdf"
                                    class="hidden"
                                    onchange="handleSingleFileSelect(this, 'transkrip-preview')"
                                >
                                <label for="transkrip" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="transkrip-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="transkrip-file" class="bg-blue-50 p-3 rounded-lg border border-blue-200"></div>
                                </div>
                            </div>
                            @error('transkrip')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Form Magang NTV Upload -->
                        <div class="space-y-5 group">
                            <label for="form_magang" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    </div>
                                    From Magang NTV (silakan download di deskripsi bio paling atas)
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">Upload 1 file yang didukung: PDF atau document. Maks 10 MB.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="form_magang" 
                                    name="form_magang" 
                                    accept=".pdf,.doc,.docx"
                                    class="hidden"
                                    onchange="handleSingleFileSelect(this, 'form-preview')"
                                >
                                <label for="form_magang" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="form-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="form-file" class="bg-blue-50 p-3 rounded-lg border border-blue-200"></div>
                                </div>
                            </div>
                            @error('form_magang')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Foto Diri Upload -->
                        <div class="space-y-5 group">
                            <label for="foto_diri" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    Foto Diri
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <p class="text-gray-600 text-lg font-medium">(untuk hard copy 4x6 di bawa jika sudah aktif magang)</p>
                            <p class="text-gray-600 text-lg font-medium">Upload 1 file yang didukung: PDF, drawing, atau image. Maks 10 MB.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="foto_diri" 
                                    name="foto_diri" 
                                    accept=".pdf,.jpg,.jpeg,.png,.gif"
                                    class="hidden"
                                    onchange="handleSingleFileSelect(this, 'foto-preview')"
                                >
                                <label for="foto_diri" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">atau drag & drop file di sini</p>
                                    </div>
                                </label>
                                <div id="foto-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="foto-file" class="bg-blue-50 p-3 rounded-lg border border-blue-200"></div>
                                </div>
                            </div>
                            @error('foto_diri')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <!-- Follow Instagram Upload -->
                        <div class="space-y-5 group">
                            <label for="follow_instagram" class="block text-blue-700 font-black text-2xl">
                                <span class="flex items-center">
                                    <div class="w-12 h-12 bg-blue-100 rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                        <svg class="w-7 h-7 text-blue-700" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </div>
                                    Follow Akun Instagram Nusantara TV
                                    <span class="text-red-500 ml-3 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="bg-gradient-to-r from-pink-50 to-purple-50 border-2 border-pink-200 rounded-2xl p-6 shadow-lg mb-4">
                                <p class="text-pink-800 font-bold text-lg mb-2">Link Instagram:</p>
                                <a href="https://www.instagram.com/officialnusantaratv?igsh=azdmbnVvd3U5dzNj" target="_blank" class="text-pink-600 hover:text-pink-800 font-bold text-lg break-all hover:underline transition-colors duration-300">
                                    https://www.instagram.com/officialnusantaratv?igsh=azdmbnVvd3U5dzNj
                                </a>
                            </div>
                            <p class="text-gray-600 text-lg font-medium">Upload 1 file yang didukung: PDF atau drawing. Maks 10 MB.</p>
                            <div class="bg-white border-3 border-gray-300 rounded-2xl p-8 hover:border-blue-500 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <input 
                                    type="file" 
                                    id="follow_instagram" 
                                    name="follow_instagram" 
                                    accept=".pdf,.jpg,.jpeg,.png"
                                    class="hidden"
                                    onchange="handleSingleFileSelect(this, 'instagram-preview')"
                                >
                                <label for="follow_instagram" class="cursor-pointer flex items-center justify-center p-8 border-2 border-dashed border-blue-300 rounded-xl hover:border-blue-500 hover:bg-blue-50 transition-all duration-300">
                                    <div class="text-center">
                                        <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p class="text-blue-600 font-bold text-xl mb-2">Tambahkan file</p>
                                        <p class="text-gray-500 font-medium">Upload screenshot bahwa Anda telah follow</p>
                                    </div>
                                </label>
                                <div id="instagram-preview" class="mt-4 hidden">
                                    <p class="text-gray-600 font-medium mb-2">File yang dipilih:</p>
                                    <div id="instagram-file" class="bg-blue-50 p-3 rounded-lg border border-blue-200"></div>
                                </div>
                            </div>
                            @error('follow_instagram')
                            <p class="text-red-500 text-lg flex items-center bg-red-50 p-4 rounded-xl border-2 border-red-200 font-medium">
                                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>

                    <!-- Submit Button -->
                    <div class="mt-20 pt-12 border-t-2 border-gray-100">
                        <div class="text-center space-y-8">
                            <div class="bg-gradient-to-r from-yellow-50 to-amber-50 border-2 border-yellow-200 rounded-2xl p-8 shadow-lg">
                                <div class="flex items-center justify-center">
                                    <div class="flex-shrink-0">
                                        <div class="w-14 h-14 bg-gradient-to-br from-yellow-500 to-amber-500 rounded-full flex items-center justify-center shadow-xl">
                                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                    </div>
<<<<<<< HEAD
                                    <div class="ml-6 text-left">
                                        <p class="text-yellow-800 font-black text-xl mb-2">Perhatian!</p>
                                        <p class="text-yellow-700 text-lg font-medium">Pastikan semua data yang Anda masukkan sudah benar sebelum mengirim form pendaftaran.</p>
                                    </div>
                                </div>
                            </div>
                            
                    
                            <button 
                                type="submit" 
                                class="group relative inline-flex items-center justify-center px-16 py-8 text-2xl font-black text-white bg-gradient-to-r from-blue-700 via-blue-600 to-blue-800 rounded-3xl hover:from-blue-800 hover:via-blue-700 hover:to-blue-900 focus:outline-none focus:ring-8 focus:ring-blue-300 transition-all duration-500 shadow-2xl hover:shadow-3xl transform hover:scale-105 hover:-translate-y-2"
=======
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
                                <span class="text-blue-500 text-lg font-normal ml-3 bg-blue-100 px-3 py-1 rounded-full">(Opsional)</span>
                            </span>
                        </label>
                        <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6 hover:border-blue-500 transition-all duration-300 shadow-sm hover:shadow-md">
                            <div class="mb-4">
                                <p class="text-blue-700 text-base font-medium mb-2">Ceritakan motivasi dan alasan Anda bergabung dengan Nusantara TV:</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Pengalaman</span>
                                    <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Karir</span>
                                    <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Minat</span>
                                    <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Tujuan</span>
                                </div>
                            </div>
                        <div class="relative">
                            <textarea 
                                id="alasan_mendaftar" 
                                name="alasan_mendaftar" 
                                rows="6"
                                    class="w-full px-6 py-5 border-2 border-blue-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-500 resize-vertical shadow-sm hover:shadow-md"
                                    placeholder="Contoh: Saya tertarik dengan dunia penyiaran dan ingin mengembangkan kemampuan dalam produksi konten digital. Saya berharap dapat belajar langsung dari para profesional di Nusantara TV..."
                            >{{ old('alasan_mendaftar') }}</textarea>
                                <div class="absolute bottom-4 right-4">
                                    <div class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-medium">
                                        <span id="char-count">0</span>/500
                        </div>
                                </div>
                            </div>
                            <div class="mt-4 p-3 bg-blue-100 rounded-lg">
                                <p class="text-blue-700 text-sm font-medium flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                </svg>
                                Minimal 10 karakter - Maksimal 500 karakter
                            </p>
                            </div>
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
>>>>>>> b3f6ad5096182b69fcf358f8a6020cb46068e845
                            >
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-800 to-blue-900 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <svg class="w-10 h-10 mr-6 relative z-10 group-hover:rotate-12 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                <span class="relative z-10">Kirim Pendaftaran</span>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 rounded-3xl transition-opacity duration-300"></div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
<!-- Footer -->
<footer class="w-full mt-24 relative z-10">
    <div class="w-full bg-gradient-to-br from-gray-900 via-blue-900 to-gray-800 text-white -mx-4">
        <!-- Main Footer Content -->
        <div class="px-4 py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <!-- Company Info -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-4 shadow-xl">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo Nusantara TV" class="w-12 h-12 object-contain" />
                        </div>
                        <div>
                            <h3 class="text-2xl font-black">Nusantara TV</h3>
                            <p class="text-blue-200 font-medium">Media Digital Indonesia</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        Bergabunglah dengan keluarga besar Nusantara TV dan wujudkan impian berkarir di industri penyiaran digital terdepan Indonesia.
                    </p>
                    <!-- Social Media -->
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-500 transition-colors duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-blue-700 rounded-xl flex items-center justify-center hover:bg-blue-600 transition-colors duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-red-600 rounded-xl flex items-center justify-center hover:bg-red-500 transition-colors duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .623 6.186a31.64 31.64 0 0 0-.5 5.814 31.64 31.64 0 0 0 .5 5.814 3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136 31.64 31.64 0 0 0 .5-5.814 31.64 31.64 0 0 0-.5-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-pink-600 rounded-xl flex items-center justify-center hover:bg-pink-500 transition-colors duration-300 shadow-lg hover:shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.116.112.219.083.338-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-6">
                    <h4 class="text-2xl font-black text-white">Kontak Kami</h4>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 font-medium">Alamat Kantor</p>
                                <p class="text-white font-bold">Jakarta, Indonesia</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 font-medium">Telepon</p>
                                <p class="text-white font-bold">+62 21 xxxx xxxx</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 bg-blue-600 rounded-xl flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 font-medium">Email</p>
                                <p class="text-white font-bold">info@nusantaratv.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="space-y-6">
                    <h4 class="text-2xl font-black text-white">Program Magang</h4>
                    <div class="space-y-3">
                        <a href="#" class="block text-gray-300 hover:text-white font-medium transition-colors duration-300 hover:translate-x-2 transform">
                            → Sosial Media Editing
                        </a>
                        <a href="#" class="block text-gray-300 hover:text-white font-medium transition-colors duration-300 hover:translate-x-2 transform">
                            → Master Control Room
                        </a>
                        <a href="#" class="block text-gray-300 hover:text-white font-medium transition-colors duration-300 hover:translate-x-2 transform">
                            → Produksi Program TV
                        </a>
                        <a href="#" class="block text-gray-300 hover:text-white font-medium transition-colors duration-300 hover:translate-x-2 transform">
                            → Support Marketing
                        </a>
                        <a href="#" class="block text-gray-300 hover:text-white font-medium transition-colors duration-300 hover:translate-x-2 transform">
                            → Research & Development
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Footer -->
        <div class="border-t border-gray-700">
            <div class="px-4 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 max-w-7xl mx-auto">
                    <div class="flex items-center space-x-6">
                        <p class="text-gray-400 font-medium">
                             © 2024 Nusantara TV. All rights reserved.
                        </p>
                     </div>
                    
                    <div class="flex items-center space-x-8">
                        <a href="#" class="text-gray-400 hover:text-white font-medium transition-colors duration-300">
                            Privacy Policy
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white font-medium transition-colors duration-300">
                            Terms of Service
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white font-medium transition-colors duration-300">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</footer>
@endsection
=======
</div>

<!-- External JavaScript -->
<script src="{{ asset('js/form.js') }}"></script>
@endsection
>>>>>>> b3f6ad5096182b69fcf358f8a6020cb46068e845
