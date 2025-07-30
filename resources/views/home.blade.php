@extends('layouts.app')

@section('content')
<style>
    @keyframes scroll-x {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-scroll-x { animation: scroll-x 30s linear infinite; }
    .animate-scroll-x:hover { animation-play-state: paused; }
</style>

<!-- Header/Navbar dengan Advanced Tailwind -->
<header class="fixed inset-x-0 top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-blue-100 shadow-lg">
    <nav class="flex items-center justify-between p-4 md:p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#home" class="-m-1.5 p-1.5 text-2xl font-bold tracking-wide text-blue-700 font-poppins hover:scale-105 transition-transform duration-300">
                Nusantara TV
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobile-menu-open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 focus:outline-none hover:bg-gray-100 transition-colors duration-200">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="w-7 h-7">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>  
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8">
            <a href="#home" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Home</a>
            <a href="#berita" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Berita</a>
            <a href="#tentang" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Tentang</a>
            <a href="#bidang" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Bidang</a>
            <a href="#persyaratan" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Persyaratan</a>
            <a href="#testimonial" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Testimonial</a>
            <a href="#howtoapply" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Cara Mendaftar</a>
            <a href="#contactus" class="nav-link text-base font-semibold text-blue-700 hover:text-blue-800 font-poppins transition-all duration-300 hover:scale-105">Kontak</a>
        </div>
    </nav>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
        <div class="fixed inset-0 bg-black/40" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-0 py-4 sm:ring-1 sm:ring-gray-900/10 flex flex-col items-start" style="width:fit-content; min-width:max-content;">
            <div class="flex items-center justify-between w-full pl-6 pr-2">
                <a href="#home" class="text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
                <button id="mobile-menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 focus:outline-none">
                    <span class="sr-only">Close menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="w-7 h-7">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flow-root bg-white w-full">
                <div class="flex-1 mt-4 w-full pl-6">
                    <div class="space-y-2 flex flex-col w-full">
                        <a href="#home" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Home</a>
                        <a href="#berita" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Berita</a>
                        <a href="#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Tentang</a>
                        <a href="#bidang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Bidang</a>
                        <a href="#persyaratan" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Persyaratan</a>
                        <a href="#testimonial" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Testimonial</a>
                        <a href="#howtoapply" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Cara Mendaftar</a>
                        <a href="#contactus" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins transition-colors duration-200">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section dengan Advanced Animations -->
<section id="home" class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-primary-500 via-primary-600 to-primary-700 overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative z-10 text-center text-white px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <h1 class="text-hero font-bold font-poppins mb-6 animate-fade-in-up">
            Mulai Pengalaman Magangmu di 
            <span class="text-gradient bg-gradient-to-r from-yellow-300 to-yellow-100 bg-clip-text text-transparent">
                Nusantara TV
            </span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto font-inter leading-relaxed animate-fade-in-up animation-delay-300">
            Bergabunglah dalam magang kami untuk pengalaman berharga di dunia penyiaran dan produksi media.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in-up animation-delay-500">
            <a href="#howtoapply" class="btn-primary text-lg px-8 py-4 rounded-xl shadow-glow hover:shadow-glow-lg transform hover:scale-110 transition-all duration-500">
                Cara Mendaftar
            </a>
            <a href="#berita" class="btn-outline text-lg px-8 py-4 rounded-xl border-2 border-white text-white hover:bg-white hover:text-primary-600 transform hover:scale-110 transition-all duration-500">
                Berita Terkini
            </a>
        </div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
    <div class="absolute bottom-20 right-10 w-16 h-16 bg-white/10 rounded-full animate-float animation-delay-1000"></div>
    <div class="absolute top-1/2 left-20 w-12 h-12 bg-white/10 rounded-full animate-float animation-delay-2000"></div>
</section>

<!-- Berita Section dengan Data CRUD -->
<section id="berita" class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-4">
                Berita Terkini
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto font-inter">
                Dapatkan informasi terbaru seputar magang dan kegiatan di Nusantara TV
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($latestPosts as $post)
            <article class="card card-hover group animate-fade-in-up">
                <div class="aspect-[16/9] bg-gradient-to-br from-primary-100 to-primary-200 rounded-t-xl flex items-center justify-center">
                    <div class="text-primary-600 text-4xl font-bold">{{ substr($post->title, 0, 1) }}</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="px-3 py-1 bg-primary-100 text-primary-700 text-sm font-semibold rounded-full">
                            {{ $post->category->name ?? 'Umum' }}
                        </span>
                        <span class="text-sm text-gray-500">{{ $post->created_at->format('d M Y') }}</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300">
                        {{ $post->title }}
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        {{ Str::limit($post->body, 120) }}
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">By {{ $post->author->name ?? 'Admin' }}</span>
                        <a href="#" class="text-primary-600 hover:text-primary-700 font-semibold transition-colors duration-200">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">📰</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada berita</h3>
                <p class="text-gray-500">Berita akan muncul di sini</p>
            </div>
            @endforelse
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="btn-primary text-lg px-8 py-3 rounded-xl">
                Baca Berita Lainnya
            </a>
        </div>
    </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in-left">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-6">
                    Tentang Magang
                </h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed font-inter">
                    Program magang di Nusantara TV memberikan kesempatan bagi mahasiswa dan fresh graduate untuk mendapatkan pengalaman langsung di industri media dan penyiaran.
                </p>
                <div class="space-y-4">
                    @foreach($benefits->take(3) as $benefit)
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-1">{{ $benefit->title }}</h3>
                            <p class="text-gray-600">{{ $benefit->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="animate-fade-in-right">
                <div class="relative">
                    <div class="aspect-square bg-gradient-to-br from-primary-200 to-primary-300 rounded-2xl p-8">
                        <div class="text-center">
                            <div class="text-6xl mb-4">🎯</div>
                            <h3 class="text-2xl font-bold text-primary-700 mb-4">Pengalaman Praktis</h3>
                            <p class="text-primary-600">Dapatkan pengalaman langsung di industri media yang sesungguhnya</p>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent-400 rounded-full animate-pulse-slow"></div>
                    <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-success-400 rounded-full animate-float"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bidang Section dengan Data CRUD -->
<section id="bidang" class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-4">
                Kategori Bidang Magang
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto font-inter">
                Pilih bidang yang sesuai dengan minat dan keahlianmu
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($categories as $category)
            <div class="card card-hover group animate-fade-in-up">
                <div class="aspect-[4/3] bg-gradient-to-br from-primary-100 to-primary-200 rounded-t-xl flex items-center justify-center relative overflow-hidden">
                    @if($category->photo)
                    <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" class="w-full h-full object-cover">
                    @else
                    <div class="text-primary-600 text-6xl font-bold">{{ substr($category->name, 0, 1) }}</div>
                    @endif
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/30 transition-all duration-300"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors duration-300">
                        {{ $category->name }}
                    </h3>
                    <p class="text-gray-600 mb-4">
                        {{ $category->description ?? 'Deskripsi kategori akan ditampilkan di sini.' }}
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">{{ $category->posts_count ?? 0 }} posisi tersedia</span>
                        <a href="#" class="text-primary-600 hover:text-primary-700 font-semibold transition-colors duration-200">
                            Lihat Detail →
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">📂</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada kategori</h3>
                <p class="text-gray-500">Kategori akan muncul di sini</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Persyaratan Section -->
<section id="persyaratan" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-4">
                Persyaratan Magang
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto font-inter">
                Pastikan kamu memenuhi persyaratan berikut sebelum mendaftar
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($requirements as $requirement)
            <div class="card card-hover animate-fade-in-up">
                <div class="p-6">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $requirement->title }}</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $requirement->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">📋</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada persyaratan</h3>
                <p class="text-gray-500">Persyaratan akan muncul di sini</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimonial Section dengan Data CRUD -->
<section id="testimonial" class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-4">
                Testimonial Alumni
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto font-inter">
                Dengarkan pengalaman langsung dari alumni magang kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials as $testimonial)
            <div class="card card-hover animate-fade-in-up">
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl">
                            {{ substr($testimonial->name, 0, 1) }}
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900">{{ $testimonial->name }}</h3>
                            <p class="text-sm text-gray-600">{{ $testimonial->instansi ?? 'Alumni Magang' }}</p>
                            @if($testimonial->category)
                            <span class="inline-block px-2 py-1 bg-primary-100 text-primary-700 text-xs rounded-full mt-1">
                                {{ $testimonial->category->name }}
                            </span>
                            @endif
                        </div>
                    </div>
                    <p class="text-gray-600 italic leading-relaxed">
                        "{{ $testimonial->description }}"
                    </p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">💬</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada testimonial</h3>
                <p class="text-gray-500">Testimonial akan muncul di sini</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Cara Mendaftar Section -->
<section id="howtoapply" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-4">
                Cara Mendaftar
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto font-inter">
                Ikuti langkah-langkah berikut untuk mendaftar magang
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($applySteps as $index => $step)
            <div class="text-center animate-fade-in-up">
                <div class="relative mb-6">
                    <div class="w-20 h-20 bg-primary-600 rounded-full flex items-center justify-center text-white font-bold text-2xl mx-auto">
                        {{ $index + 1 }}
                    </div>
                    @if($index < count($applySteps) - 1)
                    <div class="hidden lg:block absolute top-10 left-full w-full h-0.5 bg-primary-200 transform translate-x-4"></div>
                    @endif
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $step->title }}</h3>
                <p class="text-gray-600 leading-relaxed">{{ $step->description }}</p>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <div class="text-gray-400 text-6xl mb-4">📝</div>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada langkah pendaftaran</h3>
                <p class="text-gray-500">Langkah pendaftaran akan muncul di sini</p>
            </div>
            @endforelse
        </div>
        
        <div class="text-center mt-16">
            <a href="#contactus" class="btn-primary text-lg px-8 py-4 rounded-xl shadow-glow hover:shadow-glow-lg transform hover:scale-110 transition-all duration-500">
                Daftar Sekarang
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contactus" class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 font-poppins mb-4">
                Hubungi Kami
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto font-inter">
                Punya pertanyaan? Jangan ragu untuk menghubungi kami
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="animate-fade-in-left">
                <div class="card p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Alamat</h4>
                                <p class="text-gray-600">Jl. Nusantara No. 123, Jakarta</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Telepon</h4>
                                <p class="text-gray-600">+62 21 1234 5678</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Email</h4>
                                <p class="text-gray-600">magang@nusantaratv.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="animate-fade-in-right">
                <div class="card p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-input" placeholder="Masukkan nama lengkap">
                        </div>
                        <div>
                            <label class="form-label">Email</label>
                            <input type="email" class="form-input" placeholder="Masukkan email">
                        </div>
                        <div>
                            <label class="form-label">Subjek</label>
                            <input type="text" class="form-input" placeholder="Masukkan subjek">
                        </div>
                        <div>
                            <label class="form-label">Pesan</label>
                            <textarea rows="4" class="form-input" placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn-primary w-full">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuOpen = document.getElementById('mobile-menu-open');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuOpen && mobileMenuClose && mobileMenu) {
        mobileMenuOpen.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden');
        });
        
        mobileMenuClose.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
        
        // Close menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                mobileMenu.classList.add('hidden');
            }
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Observe all elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
});
</script>
@endsection