@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Header -->
    <header class="fixed inset-x-0 top-0 z-50 bg-white shadow-lg transition-all duration-300" id="navbar">
        <nav class="flex items-center justify-between p-4 md:p-6">
            <div class="flex lg:flex-1">
                <a href="{{ route('home') }}#home" class="text-2xl font-bold tracking-wide text-blue-700 font-poppins">Nusantara TV</a>
            </div>
            <div class="flex lg:hidden">
                <button id="mobile-menu-open" type="button" class="p-2 text-black">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-8">
                <a href="{{ route('home') }}#home" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Home</a>
                <a href="{{ route('home') }}#berita" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Berita</a>
                <a href="{{ route('home') }}#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Tentang</a>
                <a href="{{ route('home') }}#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Bidang</a>
                <a href="{{ route('home') }}#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Persyaratan</a>
                <a href="{{ route('home') }}#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Testimonial</a>
                <a href="{{ route('home') }}#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Cara Mendaftar</a>
                <a href="{{ route('home') }}#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-500 transition-colors font-poppins">Kontak</a>
            </div>
        </nav>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
            <div class="fixed inset-0 bg-black/40"></div>
            <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-4 py-6 w-64">
                <div class="flex items-center justify-between mb-6">
                    <a href="{{ route('home') }}#home" class="text-xl font-bold text-blue-700 font-poppins">Nusantara TV</a>
                    <button id="mobile-menu-close" type="button" class="p-2 text-gray-700">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-4">
                    <a href="{{ route('home') }}#home" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Home</a>
                    <a href="{{ route('home') }}#berita" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Berita</a>
                    <a href="{{ route('home') }}#tentang" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Tentang</a>
                    <a href="{{ route('home') }}#bidang" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Bidang</a>
                    <a href="{{ route('home') }}#persyaratan" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Persyaratan</a>
                    <a href="{{ route('home') }}#testimonial" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Testimonial</a>
                    <a href="{{ route('home') }}#howtoapply" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Cara Mendaftar</a>
                    <a href="{{ route('home') }}#contactus" class="block text-base font-semibold text-gray-900 hover:text-blue-700 font-poppins">Kontak</a>
                </div>
            </div>
        </div>
    </header>
</div>

<!-- Hero Section -->
<section class="pt-20 pb-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left scroll-animation">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-gray-900 mb-6 font-poppins">
                    {{ $category->name }}
                </h1>
                <p class="text-lg sm:text-xl text-gray-600 mb-8 font-poppins">
                    {{ $category->description ?? 'Deskripsi kategori belum tersedia.' }}
                </p>
            </div>
                                    <div class="relative scroll-animation">
                @if($category->photo)
                    <img src="@photo($category->photo)" alt="{{ $category->name }}" class="w-full h-80 md:h-96 object-cover rounded-lg shadow-lg">
                @else
                    <div class="w-full h-80 md:h-96 bg-gray-100 rounded-lg flex items-center justify-center text-gray-500 text-2xl font-semibold font-poppins">
                        📺 {{ $category->name }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Subcategories Section -->
@if(isset($subcategories) && $subcategories->count() > 0)
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 scroll-animation">
            <h2 class="text-3xl md:text-4xl font-bold text-black mb-4 font-poppins">Spesialisasi {{ $category->name }}</h2>
            <div class="w-32 h-1 bg-black mx-auto rounded"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($subcategories as $sub)
                                    <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-xl transition-shadow duration-300 scroll-animation">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4 font-poppins">{{ $sub->name }}</h3>
                <div class="text-gray-600 leading-relaxed font-poppins">{!! $sub->description !!}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if(isset($testimonials) && count($testimonials) > 0)
<section class="py-16 bg-gray-50" id="testimonial">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-4 scroll-animation font-poppins">
            Apa Kata Mereka tentang Program Magang Ini di {{ $category->name }}
        </h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded"></div>
    
         <div class="overflow-hidden relative py-8">
             <div class="flex animate-scroll-x gap-4">
                @foreach($testimonials as $t)
                     <div class="bg-white/80 rounded-xl shadow-lg border border-white/40 p-4 md:p-6 max-w-xs w-full inline-block flex-shrink-0 text-gray-800 mx-2 min-h-[280px] flex flex-col items-center break-words">
                         <div class="mb-3">
                             <img src="@photoWithFallback($t->photo, 'testimonials')" 
                                  alt="{{ $t->name }}" 
                                  class="w-24 h-24 rounded-full object-cover border-3 border-gray-200 shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105" />
                         </div>
                         <div class="italic text-sm mb-3 text-center text-gray-700 flex-grow">"{{ $t->description }}"</div>
                         <div class="font-bold text-base mb-1 text-blue-700 text-center flex-shrink-0">{{ $t->name }}@if($t->instansi) - {{ $t->instansi }}@endif</div>
                         @if($t->category)
                             <div class="text-xs text-gray-500 text-center flex-shrink-0">{{ $t->category ? $t->category->name : 'Uncategorized' }}</div>
                         @endif
                     </div>
                 @endforeach
             </div>
         </div>
    </div>
</section>
@endif

<!-- Optimized Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    
    openBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('hidden');
    });
    
    closeBtn.addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
    });
    
    mobileMenu.querySelector('.bg-black\\/40').addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
    });
    
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-xl', 'bg-white/95', 'backdrop-blur-sm');
        } else {
            navbar.classList.remove('shadow-xl', 'bg-white/95', 'backdrop-blur-sm');
        }
    });
    
    // Optimized Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            } else {
                // Remove animation class when element is out of viewport for re-animation
                entry.target.classList.remove('animate-fade-in-up');
            }
        });
    }, observerOptions);
    
    // Observe all elements with scroll-animation class
    document.querySelectorAll('.scroll-animation').forEach(el => {
        observer.observe(el);
    });
});
</script>

<style>
/* Optimized scroll animation styles */
.scroll-animation {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease-out;
}

.scroll-animation.animate-fade-in-up {
    opacity: 1;
    transform: translateY(0);
}

/* Font Poppins fallback */
.font-poppins {
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

/* Horizontal scroll animation for testimonials */
@keyframes scroll-x {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

.animate-scroll-x {
    animation: scroll-x 30s linear infinite;
}

.animate-scroll-x:hover {
    animation-play-state: paused;
}
</style>
@endsection 