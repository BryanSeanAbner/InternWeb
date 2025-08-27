@extends('layouts.app')

<style>
@keyframes pulse {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

.animate-pulse {
    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}
</style>

@section('content')
<div class="py-4 px-4">
    <div class="max-w-4xl mx-auto relative z-10 bg-white rounded-xl shadow-2xl overflow-hidden border border-gray-200 hover:shadow-3xl transition-all duration-500" style="height: 200px;">
        <img src="{{ asset('img/nusantaratv_cover.jpeg') }}" alt="Nusantara TV Cover" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
    </div> 

    <!-- Form Section -->
    <div class="py-6 px-4">
        <div class="max-w-4xl mx-auto relative z-10">
            <!-- Main Form Card -->
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-200 hover:shadow-3xl transition-all duration-500">
                <!-- Form Header -->
                <div class="bg-gradient-to-r from-blue-700 to-blue-800 px-8 py-8 text-center">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-6 drop-shadow-2xl">Form Pendaftaran Magang</h1>
                    <h2 class="text-xl md:text-2xl font-bold text-white mb-4">Lengkapi Data Diri Anda</h2>
                    <p class="text-blue-100 text-base">
                        Pastikan semua data yang Anda masukkan sudah benar dan lengkap
                    </p>
                </div>
            

            <!-- Form Content -->
            <div class="px-8 lg:px-6 py-6">
                <!-- Success Alert -->
                @if(session('success'))
                <div class="mb-8 bg-green-50 border border-green-200 rounded-xl p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-green-800 font-bold text-lg mb-1">Pendaftaran Berhasil!</p>
                            <p class="text-green-700 text-base">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Error Alert -->
                @if($errors->any())
                <div class="mb-8 bg-red-50 border border-red-200 rounded-xl p-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-red-800 font-bold text-lg mb-2">Terdapat kesalahan pada form:</p>
                            <ul class="text-red-700 text-base space-y-1">
                                @foreach($errors->all() as $error)
                                <li class="flex items-center">
                                    <span class="w-1.5 h-1.5 bg-red-500 rounded-full mr-2"></span>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Main Form -->
                <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                    @csrf
                    
                    <!-- Personal Information Section -->
                    <div class="mb-8">
                        <div class="flex items-center border-l-4 border-blue-700 pl-6 mb-6 bg-gradient-to-r from-blue-50 to-blue-100 py-4 rounded-r-xl">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mr-4 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-blue-700 mb-1">Informasi Pribadi</h3>
                                <p class="text-gray-600 text-base">Pastikan data yang Anda masukkan sesuai dengan identitas resmi</p>
                            </div>
                        </div>
                    </div>

                    <!-- Personal Information Fields -->
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
                            </div>
                            @error('nama_lengkap')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
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
                                    placeholder="contoh@gmail.com"
                                >
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
                                            class="w-5 h-5 text-blue-700 border-2 border-gray-300 focus:ring-blue-500 focus:ring-2 rounded-full"
                                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'checked' : '' }}
                                        >
                                        <span class="ml-3 text-gray-700 text-lg font-medium group-hover/radio:text-blue-700 transition-colors duration-200">Laki - Laki</span>
                                    </label>
                                    <label class="flex items-center cursor-pointer group/radio">
                                        <input 
                                            type="radio" 
                                            name="jenis_kelamin" 
                                            value="Perempuan"
                                            class="w-5 h-5 text-blue-700 border-2 border-gray-300 focus:ring-blue-500 focus:ring-2 rounded-full"
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
                                    placeholder="Tempat anda lahir"
                                >
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
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="tanggal_lahir" 
                                        name="tanggal_lahir" 
                                        value="{{ old('tanggal_lahir') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('tanggal_lahir') border-red-500 bg-red-50 @enderror"
                                    >
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
                                    <span class="text-red-500 ml-2 text-2xl">*</span>
                                </span>
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    id="domisili" 
                                    name="domisili" 
                                    value="{{ old('domisili') }}"
                                    required
                                    class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('domisili') border-red-500 bg-red-50 @enderror"
                                    placeholder="Kota/Kabupaten tempat tinggal saat ini"
                                >
                            </div>
                            @error('domisili')
                            <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-lg border border-red-200">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                            @enderror
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
                    <!-- Educational Information Section -->
                    <div class="mb-8">
                        <div class="flex items-center border-l-4 border-blue-700 pl-6 mb-6 bg-gradient-to-r from-blue-50 to-blue-100 py-4 rounded-r-xl">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mr-4 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-blue-700 mb-1">Informasi Pendidikan</h3>
                                <p class="text-gray-600 text-base">Data pendidikan dan status akademik saat ini</p>
                            </div>
                        </div>
                    </div>

                    <!-- Educational Fields -->
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
                                </div>
                                @error('asal_sekolah')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
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
                                </div>
                                @error('tahun_angkatan')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
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
                                </div>
                                @error('nim_nis')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
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
                                </div>
                                @error('jurusan')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
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
                                    <input 
                                        type="text" 
                                        id="semester" 
                                        name="semester" 
                                        value="{{ old('semester') }}"
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-700 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('semester') border-red-500 bg-red-50 @enderror"
                                        placeholder="Contoh: Semester 1, Semester 2, atau Sudah Lulus"
                                    >
                                </div>
                                @error('semester')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    

                    <!-- Internship Information Section -->
                    <div class="mb-8">
                        <div class="flex items-center border-l-4 border-blue-700 pl-6 mb-6 bg-gradient-to-r from-blue-50 to-blue-100 py-4 rounded-r-xl">
                            <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-r from-blue-700 to-blue-600 rounded-full flex items-center justify-center mr-4 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-blue-700 mb-1">Informasi Magang</h3>
                                <p class="text-gray-600 text-base">Detail periode dan bidang magang yang diminati</p>
                            </div>
                        </div>
                    

                    <!-- Internship Fields -->
                    <div class="space-y-10">
                        <!-- Tanggal Mulai Magang -->
                            <div class="space-y-4 group">
                                <label for="tanggal_mulai_magang" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('tanggal_mulai_magang') border-red-500 bg-red-50 @enderror"
                                        min=""
                                    >
                                </div>
                                @error('tanggal_mulai_magang')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- Tanggal Selesai Magang -->
                            <div class="space-y-4 group">
                                <label for="tanggal_selesai_magang" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                        class="w-full px-6 py-5 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300 text-lg placeholder-gray-400 shadow-sm hover:shadow-md hover:border-blue-500 group-hover:border-blue-400 @error('tanggal_selesai_magang') border-red-500 bg-red-50 @enderror"
                                        min=""
                                    >
                                </div>
                                @error('tanggal_selesai_magang')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>

                            <!-- Bidang Minat Magang -->
                            <div class="space-y-4 group">
                                <label class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                            </svg>
                                        </div>
                                        Bidang Minat Magang
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-6 hover:border-blue-500 transition-all duration-300 shadow-sm hover:shadow-md">
                                    <p class="text-blue-700 text-base mb-4 font-medium">Pilih salah satu bidang yang sesuai dengan minat dan kemampuan Anda:</p>
                                    <div class="grid gap-3">
                                        @forelse($internshipFields as $field)
                                        <label class="flex items-start cursor-pointer group/radio p-3 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="{{ $field->name }}"
                                                class="w-5 h-5 text-blue-600 border-2 border-gray-300 focus:ring-blue-500 focus:ring-2 mt-1 rounded-full"
                                                {{ old('bidang_minat_magang') == $field->name ? 'checked' : '' }}
                                            >
                                            <div class="ml-3">
                                                <span class="text-gray-800 text-lg font-semibold group-hover:text-blue-700 transition-colors duration-200">{{ $field->name }}</span>
                                            </div>
                                        </label>
                                        @empty
                                        <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                                            <p class="text-yellow-700 text-sm">Belum ada bidang magang yang tersedia. Silakan hubungi admin.</p>
                                        </div>
                                        @endforelse
                                        
                                        <label class="flex items-start cursor-pointer group/radio p-3 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                                            <input 
                                                type="radio" 
                                                name="bidang_minat_magang" 
                                                value="Lainnya"
                                                class="w-5 h-5 text-blue-600 border-2 border-gray-300 focus:ring-blue-500 focus:ring-2 mt-1 rounded-full"
                                                {{ old('bidang_minat_magang') == 'Lainnya' ? 'checked' : '' }}
                                            >
                                            <div class="ml-3 flex-1">
                                                <span class="text-gray-800 text-lg font-semibold group-hover:text-blue-700 transition-colors duration-200">Bidang Lainnya</span>
                                                <input 
                                                    type="text" 
                                                    name="bidang_minat_lainnya" 
                                                    value="{{ old('bidang_minat_lainnya') }}"
                                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-base transition-all duration-300"
                                                    placeholder="Sebutkan bidang minat lainnya..."
                                                >
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                @error('bidang_minat_magang')
                                <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <!-- CV  -->
                            <div class="space-y-4 group">
                                <label for="cv" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        CV (Curriculum Vitae)
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                
                                <input id="cv" 
                                    name="cv" 
                                    type="file" 
                                    accept=".pdf" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: PDF, DOC, DOCX. Maksimal 2MB.
                                </p>
                                @error('cv')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Kartu Tanda Penduduk (KTP)  -->
                            <div class="space-y-4 group">
                                <label for="ktp" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V4a2 2 0 114 0v2m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                                            </svg>
                                        </div>
                                        Kartu Tanda Penduduk (KTP)                             
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                    <p class="text-sm text-gray-500 mt-1">Notes: bila belum punya KTP isi dengan Kartu Pelajar/Mahasiswa</p>
                                </label>
                                
                                <input id="ktp" 
                                    name="ktp" 
                                    type="file" 
                                    accept=".pdf" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: PDF. Maksimal 2MB.
                                </p>
                                @error('ktp')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Kartu Tanda Mahasiswa / Kartu Pelajar  -->
                            <div class="space-y-4 group">
                                <label for="kartu_pelajar" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                                            </svg>
                                        </div>
                                        Kartu Tanda Mahasiswa (KTM)
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                
                                <input id="kartu_pelajar" 
                                    name="kartu_pelajar" 
                                    type="file" 
                                    accept=".pdf" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: PDF. Maksimal 2MB.
                                </p>
                                @error('kartu_pelajar')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Surat Keterangan Magang Yang Di Berikan Dari Kampus / Sekolah  -->
                            <div class="space-y-4 group">
                                <label for="surat_magang" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        Surat magang dari kampus
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                
                                <input id="surat_magang" 
                                    name="surat_magang" 
                                    type="file" 
                                    accept=".pdf" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: PDF. Maksimal 2MB.
                                </p>
                                @error('surat_magang')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Transkip Nilai Terakhir  -->
                            <div class="space-y-4 group">
                                <label for="transkip_nilai" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        Transkrip nilai
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                
                                <input id="transkip_nilai" 
                                    name="transkip_nilai" 
                                    type="file" 
                                    accept=".pdf" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: PDF. Maksimal 2MB.
                                </p>
                                @error('transkip_nilai')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- From Magang NTV  -->
                            <div class="space-y-4 group">
                                <label for="form_magang_ntv" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        </div>
                                        Form Magang NTV
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                    <p class="text-sm text-gray-500 mt-1">Silakan download form magang NTV di <a href="https://drive.google.com/file/d/1OJOaU0mXrpgFkx8gD4253zXLDCa63IaT/view?usp=sharing" class="text-blue-700 underline hover:text-blue-800 font-black">sini</a></p>
                                </label>
                                
                                <input id="form_magang_ntv" 
                                    name="form_magang_ntv" 
                                    type="file" 
                                    accept=".pdf" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: PDF. Maksimal 2MB.
                                </p>
                                @error('form_magang_ntv')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Foto Diri -->
                            <div class="space-y-4 group">
                                <label for="foto_diri" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                            </svg>
                                        </div>
                                        Foto Diri 
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                </label>
                                
                                <input id="foto_diri" 
                                    name="foto_diri" 
                                    type="file" 
                                    accept="image/*" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: JPG, PNG. Maksimal 2MB.
                                </p>
                                @error('foto_diri')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <!-- Follow Akun Instagram Nusantara TV -->
                            <div class="space-y-4 group">
                                <label for="screenshot_instagram" class="block text-blue-600 font-bold text-xl">
                                    <span class="flex items-center">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3 shadow-sm">
                                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                            </svg>
                                        </div>
                                        Screenshot Instagram
                                        <span class="text-red-500 ml-2 text-2xl">*</span>
                                    </span>
                                    <p class="text-sm text-gray-500 mt-1">https://www.instagram.com/officialnusantaratv?igsh=azdmbnVvd3U5dzN</p>
                                </label>
                                
                                <input id="screenshot_instagram" 
                                    name="screenshot_instagram" 
                                    type="file" 
                                    accept="image/*" 
                                    required
                                    class="block w-full text-sm text-gray-500 file:mr-4 file:py-3 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 file:cursor-pointer cursor-pointer border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-600 transition-all duration-300">
                                <p class="mt-2 text-sm text-gray-500">
                                    Format yang didukung: JPG, PNG. Maksimal 2MB.
                                </p>
                                @error('screenshot_instagram')
                                    <p class="text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
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
                                class="mt-2 w-6 h-6 text-blue-700 border-2 border-gray-300 rounded-xl focus:ring-blue-500 focus:ring-2 shadow-sm"
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
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent opacity-0 hover:opacity-20 transition-opacity"></div>
                            <span class="flex items-center justify-center relative z-10">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Kirim Pendaftaran
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Enhanced Footer Information -->
        <div class="mt-12 text-center space-y-6">
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-blue-100 hover:shadow-2xl transition-all duration-300">
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
                        <span class="text-base">magang.nusantaratv@gmail.com</span>
                    </div>
                    <div class="flex flex-col items-center text-blue-700 bg-blue-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-lg">Kontak Kami</span>
                        <span class="text-base">+62 857-7734-9636</span>
                    </div>
                    <div class="flex flex-col items-center text-blue-700 bg-blue-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 group">
                        <div class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-lg">Lokasi Kami</span>
                        <span class="text-base">Jl. Pulomas Selatan Kav. Blok, Kota Jakarta Timur 13210</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-blue-700 to-blue-800 text-white py-6 px-8 rounded-2xl shadow-xl">
                <p class="text-lg font-bold flex items-center justify-center">
                    © 2025 Nusantara TV. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get date input elements
    const tanggalMulaiInput = document.getElementById('tanggal_mulai_magang');
    const tanggalSelesaiInput = document.getElementById('tanggal_selesai_magang');
    
    // Remove any date restrictions by setting min to empty
    tanggalMulaiInput.min = '';
    tanggalSelesaiInput.min = '';
    
    // Add event listener for tanggal mulai to update tanggal selesai minimum
    tanggalMulaiInput.addEventListener('change', function() {
        const selectedStartDate = this.value;
        if (selectedStartDate) {
            // Set minimum date for tanggal selesai to be the same as tanggal mulai
            tanggalSelesaiInput.min = selectedStartDate;
            
            // If tanggal selesai is before tanggal mulai, clear it
            if (tanggalSelesaiInput.value && tanggalSelesaiInput.value < selectedStartDate) {
                tanggalSelesaiInput.value = '';
            }
        }
    });
    
    // Add event listener for tanggal selesai to validate it's not before tanggal mulai
    tanggalSelesaiInput.addEventListener('change', function() {
        const selectedEndDate = this.value;
        const startDate = tanggalMulaiInput.value;
        
        if (selectedEndDate && startDate && selectedEndDate < startDate) {
            alert('Tanggal selesai magang tidak boleh sebelum tanggal mulai magang!');
            this.value = '';
        }
    });
    
    // Add form validation before submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const startDate = tanggalMulaiInput.value;
        const endDate = tanggalSelesaiInput.value;
        
        if (startDate && endDate && endDate < startDate) {
            e.preventDefault();
            alert('Tanggal selesai magang tidak boleh sebelum tanggal mulai magang!');
            return false;
        }
        
        // Validate all file inputs
        const fileInputs = document.querySelectorAll('input[type="file"]');
        let hasError = false;
        
        fileInputs.forEach(input => {
            const hasFile = input.files.length > 0;
            const hasStoredData = sessionStorage.getItem(`file_${input.id}`);
            const isHidden = input.style.display === 'none';
            
            // If input is visible and required, check if file is selected
            if (!isHidden && input.required && !hasFile) {
                hasError = true;
                input.classList.add('border-red-500', 'bg-red-50');
                
                // Show error message
                let errorMsg = input.parentNode.querySelector('.file-error-msg');
                if (!errorMsg) {
                    errorMsg = document.createElement('p');
                    errorMsg.className = 'text-red-500 text-base flex items-center bg-red-50 p-3 rounded-xl border border-red-200 file-error-msg';
                    errorMsg.innerHTML = `
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        File ini wajib diupload
                    `;
                    input.parentNode.appendChild(errorMsg);
                }
            } else {
                input.classList.remove('border-red-500', 'bg-red-50');
                const errorMsg = input.parentNode.querySelector('.file-error-msg');
                if (errorMsg) {
                    errorMsg.remove();
                }
            }
        });
        
        if (hasError) {
            e.preventDefault();
            alert('Mohon lengkapi semua file yang wajib diupload!');
            return false;
        }
    });

    // File persistence and error field focus functionality
    const fileInputs = document.querySelectorAll('input[type="file"]');
    
    // Store uploaded files in sessionStorage
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.files.length > 0) {
                const file = this.files[0];
                const reader = new FileReader();
                reader.onload = function(e) {
                    sessionStorage.setItem(`file_${input.id}`, e.target.result);
                    sessionStorage.setItem(`file_name_${input.id}`, file.name);
                };
                reader.readAsDataURL(file);
                
                // Remove error styling and message when file is selected
                input.classList.remove('border-red-500', 'bg-red-50');
                const errorMsg = input.parentNode.querySelector('.file-error-msg');
                if (errorMsg) {
                    errorMsg.remove();
                }
            }
        });
    });

    // Restore files on page load if there are errors
    @if($errors->any())
        fileInputs.forEach(input => {
            const storedFile = sessionStorage.getItem(`file_${input.id}`);
            const storedFileName = sessionStorage.getItem(`file_name_${input.id}`);
            
            if (storedFile && storedFileName) {
                // Create a fake file input display
                const fileDisplay = document.createElement('div');
                fileDisplay.className = 'mt-2 p-3 bg-green-50 border border-green-200 rounded-lg';
                fileDisplay.innerHTML = `
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-green-800 font-medium">File tersimpan: ${storedFileName}</span>
                        <button type="button" class="ml-auto text-red-600 hover:text-red-800" onclick="removeStoredFile('${input.id}')">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                `;
                
                // Insert after the file input
                input.parentNode.insertBefore(fileDisplay, input.nextSibling);
                
                // Hide the original file input
                input.style.display = 'none';
                input.required = false;
                
                // Hide the required asterisk
                const parentGroup = input.closest('.group');
                if (parentGroup) {
                    const label = parentGroup.querySelector('label');
                    if (label) {
                        const requiredSpan = label.querySelector('.text-red-500');
                        if (requiredSpan) {
                            requiredSpan.style.display = 'none';
                        }
                    }
                }
                
                // Add a hidden input to preserve the file data
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = `stored_${input.name}`;
                hiddenInput.value = storedFile;
                input.parentNode.appendChild(hiddenInput);
            }
        });

        // Auto-scroll to first error field
        const firstErrorField = document.querySelector('.border-red-500');
        if (firstErrorField) {
            setTimeout(() => {
                firstErrorField.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'center' 
                });
                firstErrorField.focus();
                
                // Add highlight effect
                firstErrorField.classList.add('animate-pulse');
                setTimeout(() => {
                    firstErrorField.classList.remove('animate-pulse');
                }, 2000);
            }, 500);
        }
    @endif
});

// Function to remove stored file
function removeStoredFile(inputId) {
    sessionStorage.removeItem(`file_${inputId}`);
    sessionStorage.removeItem(`file_name_${inputId}`);
    
    // Remove the display element
    const fileDisplay = event.target.closest('div');
    if (fileDisplay) {
        fileDisplay.remove();
    }
    
    // Remove hidden input
    const hiddenInput = document.querySelector(`input[name="stored_${inputId.replace('_', '.')}"]`);
    if (hiddenInput) {
        hiddenInput.remove();
    }
    
    // Show the original file input again
    const fileInput = document.getElementById(inputId);
    if (fileInput) {
        fileInput.style.display = 'block';
        fileInput.required = true;
    }
    
    // Add validation class to show it's required
    const parentGroup = fileInput.closest('.group');
    if (parentGroup) {
        const label = parentGroup.querySelector('label');
        if (label) {
            const requiredSpan = label.querySelector('.text-red-500');
            if (requiredSpan) {
                requiredSpan.style.display = 'inline';
            }
        }
    }
}

// Clear stored files when form is successfully submitted
document.addEventListener('DOMContentLoaded', function() {
    @if(session('success'))
        // Clear all stored files on successful submission
        const fileInputs = document.querySelectorAll('input[type="file"]');
        fileInputs.forEach(input => {
            sessionStorage.removeItem(`file_${input.id}`);
            sessionStorage.removeItem(`file_name_${input.id}`);
        });
    @endif
});
</script>