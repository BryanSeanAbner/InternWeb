@extends('layouts.app')

@section('content')
<!-- Header/Navbar -->
<header class="fixed inset-x-0 top-0 z-50 bg-white border-b border-gray-200 shadow">
    <nav class="flex items-center justify-between p-4">
        <div class="flex">
            <a href="#home" class="text-2xl font-bold text-blue-700">
                Nusantara TV
            </a>
        </div>
        
        <div class="flex lg:hidden">
            <button id="mobile-menu-open" type="button" class="text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>  
            </button>
        </div>
        
        <div class="hidden lg:flex lg:gap-x-8">
            <a href="#home" class="text-base font-semibold text-blue-700 hover:text-blue-800">Home</a>
            <a href="#berita" class="text-base font-semibold text-blue-700 hover:text-blue-800">Berita</a>
            <a href="#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-800">Tentang</a>
            <a href="#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-800">Bidang</a>
            <a href="#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-800">Persyaratan</a>
            <a href="#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-800">Testimonial</a>
            <a href="#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-800">Cara Mendaftar</a>
            <a href="#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-800">Kontak</a>
        </div>
    </nav>
    
    <!-- Mobile menu -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden lg:hidden">
        <div class="fixed inset-0 bg-black bg-opacity-40"></div>
        <div class="fixed inset-y-0 right-0 bg-white shadow-xl px-4 py-4">
            <div class="flex items-center justify-between w-full">
                <a href="#home" class="text-2xl font-bold text-blue-700">Nusantara TV</a>
                <button id="mobile-menu-close" type="button" class="text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="mt-4">
                <a href="#home" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Home</a>
                <a href="#berita" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Berita</a>
                <a href="#tentang" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Tentang</a>
                <a href="#bidang" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Bidang</a>
                <a href="#persyaratan" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Persyaratan</a>
                <a href="#testimonial" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Testimonial</a>
                <a href="#howtoapply" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Cara Mendaftar</a>
                <a href="#contactus" class="block py-2 text-base font-semibold text-gray-900 hover:bg-gray-100">Kontak</a>
            </div>
        </div>
    </div>
</header>

<!-- Hero Section -->
<div id="home" class="relative h-screen flex items-center justify-start bg-cover bg-center mb-12 pt-20" style="background-image: url('{{ asset('img/hero.jpg') }}');">
    <div class="ml-4 md:ml-20 max-w-xl bg-black bg-opacity-30 rounded-lg p-6">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
            Mulai Pengalaman Magangmu di Nusantara TV
        </h1>
        <p class="text-lg text-white mb-6">
            Bergabunglah dalam magang kami untuk pengalaman berharga di dunia penyiaran dan produksi media.
        </p>
        <a href="#howtoapply" class="bg-blue-700 text-white px-8 py-3 rounded-full text-xl font-semibold hover:bg-blue-800">
            Cara Mendaftar
        </a>
    </div>
</div>

<!-- Berita Section -->
<div id="berita" class="py-8 container mx-auto px-4">
    <div class="flex flex-col items-center mb-8 animate-fade-in-up">
        <div class="text-3xl md:text-4xl font-bold text-blue-700 text-center mb-2">Berita Terkini</div>
        <div class="w-20 h-1 bg-blue-700 rounded mb-8 animate-pulse"></div>
    </div>
    
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach(($allPosts ?? $latestPosts) as $index => $post)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col min-h-[420px] p-6 hover:shadow-xl card-hover animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                <div class="relative flex flex-col items-center justify-center h-48 mb-6 bg-gray-100 rounded-lg overflow-hidden">
                    <img src="@photoWithFallback($post->photo, 'berita')" alt="{{ $post->title }}" class="w-full h-full object-cover rounded-lg" />
                </div>
                
                <div class="flex justify-between items-center mb-4">
                    <span class="inline-block bg-blue-700 text-white px-4 py-2 rounded-full text-sm font-bold uppercase">
                        {{ $post->category ? $post->category->name : 'Uncategorized' }}
                    </span>
                    <span class="text-base text-gray-500">
                        {{ $post->created_at->format('d M Y') }}
                    </span>
                </div>
                
                <h4 class="font-bold text-xl mb-1">
                    <a href="{{ route('posts.show', $post) }}" class="text-gray-900 hover:text-blue-700">
                        {{ $post->title }}
                    </a>
                </h4>
                
                <p class="text-gray-500 text-base mb-6">
                    {{ Str::limit(strip_tags($post->body), 100) }}
                </p>
                
                <a href="{{ route('posts.show', $post) }}" class="mt-auto text-blue-700 font-bold flex items-center gap-2 hover:underline">
                    Baca selengkapnya <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        @endforeach
    </div>
    
    <div class="text-center mt-8 animate-fade-in-up animation-delay-600">
        <a href="{{ route('posts.index') }}" class="bg-blue-700 text-white px-8 py-3 rounded-full text-xl font-semibold hover:bg-blue-800">
            Baca Berita Lainnya
        </a>
    </div>
</div>

<!-- Tentang Section -->
<div class="py-16" id="tentang">
    <div class="max-w-7xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-4 animate-fade-in-up">Tentang Magang</h2>
        <div class="w-20 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($benefits as $index => $benefit)
                <div class="bg-white rounded-lg shadow-lg p-6 text-center card-hover animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <div class="text-3xl mb-4">{{ $benefit->icon }}</div>
                    <div class="text-lg font-bold text-blue-700 mb-2">{{ $benefit->title }}</div>
                    <div class="text-base text-gray-700">{{ $benefit->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Bidang Section -->
<div class="py-16" id="bidang">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-4 animate-fade-in-up">Kategori Bidang Magang</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories as $index => $cat)
                <a href="{{ route('categories.show', $cat->slug) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl card-hover animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <img src="@photoWithFallback($cat->photo, 'kategori')" alt="{{ $cat->name }}" class="object-cover w-full h-48" />
                    <div class="p-4">
                        <div class="text-lg font-bold text-blue-700">{{ $cat->name }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Persyaratan Section -->
<div class="py-16" id="persyaratan">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-4 animate-fade-in-up">Persyaratan</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($requirements as $index => $req)
                <div class="bg-white rounded-lg shadow-lg p-6 card-hover animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <div class="text-2xl mb-2">{{ $req->icon }}</div>
                    <div class="text-lg font-bold text-blue-700 mb-2">
                        {{ $req->title }}
                    </div>
                    <div class="text-base text-gray-800">{{ $req->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="py-16" id="testimonial">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-4 animate-fade-in-up">
            Apa Kata Mereka tentang Program Magang Ini
        </h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        
                 <!-- Responsive grid: scroll-x di mobile, grid di md+ -->
         <div class="overflow-hidden relative py-8">
             <div class="flex animate-scroll-x gap-4">
                @foreach($testimonials as $t)
                     <div class="bg-white/80 rounded-xl shadow-lg border border-white/40 p-4 md:p-6 max-w-xs w-full inline-block flex-shrink-0 text-gray-800 mx-2 min-h-[280px] flex flex-col items-center break-words">
                         <img src="@photoWithFallback($t->photo, 'testimonials')" alt="{{ $t->name }}" class="w-20 h-20 rounded-full mb-3 border-2 border-white shadow flex-shrink-0" />
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
</div>

<!-- Cara Mendaftar Section -->
<div id="howtoapply" class="py-16">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-blue-700 mb-4 animate-fade-in-up">Cara Mendaftar</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8 mb-8">
            @foreach($applySteps as $index => $step)
                <div class="flex flex-col items-center text-center animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <!-- Circle Container -->
                    <div class="mb-4">
                        <div class="w-20 h-20 bg-blue-700 text-white rounded-full flex items-center justify-center text-2xl font-bold shadow-lg">
                            {{ $step->step_number }}
                        </div>
                    </div>
                    
                    <!-- Content Container -->
                    <div class="px-4">
                        <div class="font-bold text-blue-700 text-center mb-2 text-lg">
                            {{ $step->title }}
                        </div>
                        <div class="text-base text-gray-600 text-center">
                            {{ $step->description }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        @if($applySteps->last() && $applySteps->last()->button_text)
            <div class="text-center mt-10 animate-fade-in-up animation-delay-800">
                <a href="{{ $applySteps->last()->button_link ?? '#' }}" class="bg-blue-700 text-white px-16 py-6 rounded-full text-2xl font-semibold hover:bg-blue-800">
                    {{ $applySteps->last()->button_text }}
                </a>
            </div>
        @endif
    </div>
</div>

<!-- Footer -->
<footer id="contactus" class="pt-12 mt-12 text-white animate-fade-in-up" style="background: url('{{ asset('img/banner-background.jpg') }}') center/cover no-repeat;">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row flex-wrap justify-between items-stretch gap-8 px-4">
        <div class="flex-[2] min-w-[320px] max-w-[900px] mb-8 md:mb-0 flex flex-col animate-slide-in-left">
            <div class="text-2xl font-bold mb-4">Lokasi Nusantara TV</div>
            <div class="w-full h-80 md:h-[32rem] rounded-xl overflow-hidden mb-4 hover:shadow-2xl transition-shadow duration-300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.585492366193!2d106.87387437428204!3d-6.186187460609973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5689acb01bd%3A0xdb532d1cdbfa11e7!2sNT%20Tower!5e0!3m2!1sen!2sid!4v1752052938203!5m2!1sen!2sid" width="100%" height="100%" class="border-0 w-full h-full" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>  
        </div>
        
        <div class="flex-[1] min-w-[220px] max-w-[600px] mb-8 md:mb-0 flex flex-col justify-start animate-slide-in-right">
            <div class="text-2xl font-bold mb-4">Kontak Kami</div>
            <div class="mb-2 hover:text-blue-300 transition-colors duration-300">
                Email: <br>hello@nttower.com
            </div>
            <div class="mb-2 hover:text-blue-300 transition-colors duration-300">
                Call us at: <br>0881-0100-65128
            </div>
            <div class="mb-2 hover:text-blue-300 transition-colors duration-300">
                Our Location: <br>Jl. Pulomas Selatan Kav. Blok, Kota Jakarta Timur 13210
            </div>
            
            <div class="flex gap-4 mt-4">
                <a href="https://www.facebook.com/share/1DtLHYiaN3/" target="_blank" class="text-white text-2xl inline-block hover:text-blue-700 hover:scale-125 transition-all duration-300">
                    <!-- Facebook SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                        <path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0" fill="currentColor"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/officialnusantaratv?igsh=dTdxajZpZDNkZHMx" target="_blank" class="text-white text-2xl inline-block hover:text-pink-400 hover:scale-125 transition-all duration-300">
                    <!-- Instagram SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.783 2.295 7.149 2.233 8.415 2.175 8.795 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.363 3.678 1.344c-.98.98-1.213 2.092-1.272 3.373C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.613.059 1.281.292 2.393 1.272 3.373.98.98 2.092 1.213 3.373 1.272C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.281-.059 2.393-.292 3.373-1.272.98-.98 1.213-2.092 1.272-3.373.059-1.281.072-1.69.072-7.613 0-5.923-.013-6.332-.072-7.613-.059-1.281-.292-2.393-1.272-3.373-.98-.98-2.092-1.213-3.373-1.272C15.668.013 15.259 0 12 0z" fill="currentColor"/>
                        <path d="M12 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A3.999 3.999 0 1 1 12 8a3.999 3.999 0 0 1 0 7.999zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" fill="currentColor"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/nusantara-tv/" target="_blank" class="text-white text-2xl inline-block hover:text-blue-700 hover:scale-125 transition-all duration-300">
                    <!-- LinkedIn SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                        <path d="M19 0h-14C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5V5c0-2.761-2.239-5-5-5zm-9 19H5V9h5v10zm-2.5-11.268c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5zm15.5 11.268h-5v-5.604c0-1.337-.025-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.968V19h-5V9h4.8v1.367h.069c.669-1.267 2.304-2.604 4.742-2.604 5.073 0 6.012 3.341 6.012 7.686V19z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
    <div class="border-t border-white/20 mt-8 py-4 text-center text-base opacity-85 text-white">
        &copy; 2025 Nusantara TV. All rights reserved.
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6285777349636" class="fixed bottom-20 right-12 w-14 h-14 bg-green-500 hover:bg-green-600 rounded-full flex items-center justify-center shadow-xl z-50" target="_blank" aria-label="Chat via WhatsApp">
    <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp" class="w-12 h-12">
</a>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    
    // Open mobile menu
    openBtn.addEventListener('click', function(e) {
        e.preventDefault();
        mobileMenu.classList.remove('hidden');
    });
    
    // Close mobile menu
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        mobileMenu.classList.add('hidden');
    });
    
    // Close on backdrop click
    mobileMenu.querySelector('.bg-black').addEventListener('click', function() {
        mobileMenu.classList.add('hidden');
    });
});
</script>
@endsection