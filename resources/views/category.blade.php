@extends('layouts.app')

@section('content')
<div class="bg-white">
    <header class="navbar-sticky fixed inset-x-0 top-0 z-50 shadow-xl">
    <nav aria-label="Global" class=" bg-white flex items-center justify-between p-4 md:p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#home" class="-m-1.5 p-1.5 text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobile-menu-open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-black focus:outline-none">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="w-7 h-7">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8">
            <a href="#home" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Home</a>
            <a href="#berita" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Berita</a>
            <a href="#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Tentang</a>
            <a href="#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Bidang</a>
            <a href="#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Persyaratan</a>
            <a href="#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Testimonial</a>
            <a href="#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Cara Mendaftar</a>
            <a href="#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins">Kontak</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
        <div class="fixed inset-0 bg-black/40" aria-hidden="true"></div>
        <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-0 py-4 sm:ring-1 sm:ring-gray-900/10 flex flex-col items-start" style="width:fit-content; min-width:max-content;">
            <div class="flex items-center justify-between w-full pl-6 pr-2">
                <a href="#home" class="text-2xl font-bold trackinbig-wide text-blue-700 font-poppins">Nusantara TV</a>
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
                        <a href="#home" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Home</a>
                        <a href="#berita" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Berita</a>
                        <a href="#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Tentang</a>
                        <a href="#bidang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Bidang</a>
                        <a href="#persyaratan" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Persyaratan</a>
                        <a href="#testimonial" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Testimonial</a>
                        <a href="#howtoapply" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Cara Mendaftar</a>
                        <a href="#contactus" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100 font-poppins">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header> 
</div>

<!-- Hero Section -->
<section class="pt-20 pb-16 md:pb-20 lg:pb-24 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div class="text-center lg:text-left">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight font-poppins">
                    {{ $category->name }}
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0 font-poppins">
                    {{ $category->description ?? 'Deskripsi kategori belum tersedia.' }}
                </p>
            </div>
            <div class="relative pt-10">
                    @if($category->photo)
                        <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" class="hero-image w-full h-80 md:h-96 object-cover hover:shadow-xl transition-shadow duration-300">
                    @else
                        <div class="hero-placeholder w-full h-80 md:h-96 bg-gray-100 flex items-center justify-center text-gray-500 text-2xl font-semibold">
                            {{ $category->icon ?? '📺' }} {{ $category->sub_name ?? $category->name }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Program Magang Unggulan -->
@if(isset($subcategories) && $subcategories->count())
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-4 font-poppins">Spesialisasi {{ $category->name }}</h2>
            <div class="w-32 h-1 bg-black mx-auto rounded"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($subcategories as $sub)
            <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4 font-poppins">{{ $sub->name }}</h3>
                <p class="text-gray-600 leading-relaxed font-poppins">{{ $sub->description }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Section Testimonial -->
@if(isset($testimonials) && count($testimonials))
<div class="testimonial-section bg-transparent py-16 md:py-20 lg:py-24 mt-0 rounded-[32px]" id="testimonial">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-black mb-4 font-poppins">
            Apa Kata Mereka tentang Program Magang Ini di {{ $category->name}}
        </h2>
        <div class="w-32 h-1 bg-black mx-auto mb-10 rounded"></div>
        <!-- Responsive grid: scroll-x di mobile, grid di md+ -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach($testimonials as $t)   
                <div class="bg-white/80 rounded-xl shadow-lg border border-white/40 p-6 max-w-sm w-full flex-shrink-0 flex flex-col items-center text-gray-800">
                    <img src="{{ $t->photo ? asset('storage/'.$t->photo) : asset('img/default-avatar.png') }}" alt="{{ $t->name }}" class="w-16 h-16 rounded-full mb-3 border-2 border-white shadow" />
                    <div class="italic text-sm mb-3 text-center text-gray-700">"{{ $t->description }}"</div>
                    <div class="font-bold text-base mb-1 text-blue-900 text-center">{{ $t->name }}@if($t->instansi) - {{ $t->instansi }}@endif</div>
                    @if($t->category)
                        <div class="text-xs text-gray-500 text-center">{{ $t->category->name }}</div>
                    @endif  
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif


<!-- Mobile Navbar Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openBtn = document.getElementById('mobile-menu-open');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        
        openBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.remove('hidden');
        });
        
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.add('hidden');
        });
        
        mobileMenu.querySelector('.bg-black\/40').addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
        
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    });
</script>

<!-- Image Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const heroImage = document.querySelector('.hero-image');
        
        if (heroImage) {
            // Add loading class initially
            heroImage.classList.add('loading');
            
            // Handle image load event
            heroImage.addEventListener('load', function() {
                this.classList.remove('loading');
                this.classList.add('loaded');
            });
            
            // Handle image error event
            heroImage.addEventListener('error', function() {
                this.classList.remove('loading');
                // You can add fallback image here if needed
            });
            
            // Check if image is already loaded (cached)
            if (heroImage.complete) {
                heroImage.classList.remove('loading');
                heroImage.classList.add('loaded');
            }
        }
        
        // Add click animation for image
        const imageContainer = document.querySelector('.hero-image-container');
        if (imageContainer) {
            imageContainer.addEventListener('click', function() {
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        }
    });
</script>
@endsection 