@extends('layouts.app')

@section('content')
<div class="bg-white">
    <header class="navbar-sticky fixed inset-x-0 top-0 z-50 animate-fade-in-down shadow-xl">
    <nav aria-label="Global" class=" bg-white flex items-center justify-between p-4 md:p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#home" class="-m-1.5 p-1.5 text-2xl font-bold tracking-wide text-blue-700 font-poppins hover:scale-105 transition-transform duration-300">Nusantara TV</a>
        </div>
        <div class="flex lg:hidden">
            <button id="mobile-menu-open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-black focus:outline-none hover:bg-gray-100 transition-colors duration-200">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" class="w-7 h-7">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>  
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-8">
            <a href="#home" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Home</a>
            <a href="#berita" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Berita</a>
            <a href="#tentang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Tentang</a>
            <a href="#bidang" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Bidang</a>
            <a href="#persyaratan" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Persyaratan</a>
            <a href="#testimonial" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Testimonial</a>
            <a href="#howtoapply" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Cara Mendaftar</a>
            <a href="#contactus" class="text-base font-semibold text-blue-700 hover:text-blue-200 font-poppins transition-all duration-300 hover:scale-105">Kontak</a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
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
                        <a href="#berita" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100font-poppins transition-colors duration-200">Berita</a>
                        <a href="#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-100  font-poppins transition-colors duration-200">Tentang</a>
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
    
<div id="home" class="relative h-[80vh] md:h-[100vh] flex items-center justify-start bg-cover bg-left-bottom mb-12 pt-24 md:pt-30" style="background-image: url('{{ asset('img/hero.JPG') }}');">
    <div class="ml-4 md:ml-20 max-w-full md:max-w-xl bg-black/30 rounded-xl p-4 md:p-8 animate-fade-in-up">
        <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl font-bold text-white mb-4 drop-shadow-lg leading-tight font-poppins animate-slide-in-left">Mulai Pengalaman <br class="hidden sm:block">Magangmu di <br class="hidden sm:block">Nusantara TV</h1>
        <p class="text-base sm:text-base md:text-lg text-white mb-6 drop-shadow-lg font-poppins animate-slide-in-left animation-delay-200">Bergabunglah dalam magang kami untuk pengalaman berharga di dunia penyiaran dan produksi media.</p>
        <a href="#howtoapply" class="bg-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-full text-lg md:text-xl font-semibold shadow-lg hover:bg-blue-800 transition-all duration-300 hover:scale-105 hover:shadow-xl block w-max font-poppins animate-slide-in-left animation-delay-400">Cara Mendaftar</a>
    </div>
</div>
</div>


<!-- Berita SECTION -->
<div id="berita" class="section-area py-8 container mx-auto px-4">
    <div class="flex flex-col items-center mb-8 animate-fade-in-up">
        <div class="text-3xl md:text-4xl font-bold text-blue-700 text-center mb-2 font-poppins">Berita Terkini</div>
        <div class="w-20 h-1 bg-blue-700 rounded mb-8 animate-pulse"></div>
    </div>
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        @foreach(($allPosts ?? $latestPosts) as $index => $post)
            <div class="group bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col min-h-[420px] p-8 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                <div class="relative flex flex-col items-center justify-center h-48 mb-6 bg-gray-100 rounded-xl overflow-hidden">
                    @if($post->photo)
                        <img src="{{ asset('storage/' . $post->photo) }}" alt="{{ $post->title }}" class="w-full h-full object-cover rounded-xl group-hover:scale-110 transition-transform duration-500" />
                    @else
                        <span class="text-xl text-gray-500 font-semibold">IMAGE</span>
                    @endif
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="inline-block bg-blue-700 text-white px-5 py-2 rounded-full text-sm font-bold uppercase tracking-wider font-poppins hover:bg-blue-800 transition-colors duration-300">
                        {{ $post->category->name }}
                    </span>
                    <span class="text-base text-gray-500 font-poppins">
                        {{ $post->created_at->format('d M Y') }}
                    </span>
                </div>
                <h4 class="font-extrabold text-2xl mb-1 font-poppins">
                    <a href="{{ route('posts.show', $post) }}" class="text-gray-900 hover:text-blue-700 transition-colors duration-300">
                        {{ $post->title }}
                    </a>
                </h4>
                <p class="text-gray-500 text-base mb-6 font-poppins">
                    {{ Str::limit(strip_tags($post->body), 100) }}
                </p>
                <a href="{{ route('posts.show', $post) }}" class="mt-auto text-blue-700 font-bold flex items-center gap-2 hover:underline font-poppins group-hover:gap-4 transition-all duration-300">
                    Baca selengkapnya <span aria-hidden="true" class="group-hover:translate-x-1 transition-transform duration-300">&rarr;</span>
                </a>
            </div>
        @endforeach
    </div>
    <div class="text-center mt-8 animate-fade-in-up animation-delay-600">
        <a href="{{ route('posts.index') }}" 
            class="bg-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-full text-lg md:text-xl font-semibold shadow-lg hover:bg-blue-800 transition-all duration-300 hover:scale-105 hover:shadow-xl inline-block mt-8 font-poppins">
            Baca Berita Lainnya
        </a>
    </div>
</div>

<div class="tentang-section" id="tentang">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 lg:py-20">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins animate-fade-in-up">Tentang Magang</h2>
        <div class="w-20 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 justify-items-center items-stretch flex-wrap px-0">
            @foreach($benefits as $index => $benefit)
                <div class="bg-white rounded-2xl shadow-lg p-6 md:p-9 text-center flex flex-col items-center min-w-[220px] max-w-xs w-full mx-auto mb-4 md:mb-0 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <div class="text-3xl mb-4 hover:scale-125 transition-transform duration-300">{{ $benefit->icon }}</div>
                    <div class="text-lg font-bold text-blue-700 mb-2">{{ $benefit->title }}</div>
                    <div class="text-base text-gray-700">{{ $benefit->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="bidang-section bg-transparent py-16 md:py-20 lg:py-24 mt-0" id="bidang">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins animate-fade-in-up">Kategori Bidang Magang</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 justify-items-center">
            @foreach($categories as $index => $cat)
                <a href="{{ route('categories.show', $cat->slug) }}" class="relative group transition-all duration-500 hover:scale-105 w-full max-w-xs rounded-xl overflow-hidden shadow-lg animate-fade-in-up hover:shadow-2xl" style="animation-delay: {{ $index * 200 }}ms;">
                    @if($cat->photo)
                        <img src="{{ asset('storage/' . $cat->photo) }}" alt="{{ $cat->name }}" class="object-cover w-full h-40 md:h-48 group-hover:scale-110 transition-transform duration-500" />
                    @else
                        <div class="w-full h-40 md:h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                            <span class="text-sm">No Image</span>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition-all duration-300"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-lg font-bold text-white font-poppins group-hover:translate-y-[-5px] transition-transform duration-300">{{ $cat->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>


<div class="persyaratan-section" id="persyaratan" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0;">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins animate-fade-in-up">Persyaratan</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 px-0 md:px-6">
            @foreach($requirements as $index => $req)
                <div class="bg-white rounded-2xl shadow-lg p-6 md:p-8 flex flex-col items-start min-h-[180px] mb-4 md:mb-0 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <div class="text-2xl mb-2 hover:scale-125 transition-transform duration-300">{{ $req->icon }}</div>
                    <div class="text-base md:text-lg font-bold text-blue-700 mb-1 flex items-center">
                        {{ $req->title }}
                    </div>
                    <div class="text-base text-gray-800 opacity-95">{{ $req->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="testimonial-section bg-transparent py-16 md:py-20 lg:py-24 mt-0 rounded-[32px]" id="testimonial">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins animate-fade-in-up">
            Apa Kata Mereka tentang Program Magang Ini
        </h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
        <!-- Responsive grid: scroll-x di mobile, grid di md+ -->
        <div class="overflow-x-auto">
            <div class="flex md:grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-max md:w-auto py-8">
                @foreach($testimonials as $index => $t)
                <div class="bg-white/80 rounded-xl shadow-lg border border-white/40 p-4 md:p-6 max-w-xs w-full flex-shrink-0 flex flex-col items-center text-gray-800 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                    <img src="{{ $t->photo ? asset('storage/'.$t->photo) : asset('img/default-avatar.png') }}" alt="{{ $t->name }}"
                         class="w-16 h-16 rounded-full mb-3 border-2 border-white shadow hover:scale-110 transition-transform duration-300" />
                    <div class="italic text-sm mb-3 text-center text-gray-700">{{ $t->description }}</div>
                    <div class="font-bold text-base mb-1 text-blue-700">{{ $t->name }}</div>
                    @if($t->category)
                    <div class="text-xs text-gray-500">{{ $t->category->name }}</div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="howtoapply" class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins animate-fade-in-up">Cara Mendaftar</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded animate-pulse"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 md:gap-8 lg:gap-10 xl:gap-12 mb-8">
            @foreach($applySteps as $index => $step)
            <div class="step-container flex flex-col items-center text-center relative animate-fade-in-up" style="animation-delay: {{ $index * 200 }}ms;">
                <!-- Circle Container -->
                <div class="circle-container relative mb-4">
                    <div class="w-16 h-16 sm:w-18 sm:h-18 md:w-20 md:h-20 lg:w-22 lg:h-22 xl:w-24 xl:h-24 bg-blue-700 text-white rounded-full flex items-center justify-center text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold shadow-lg z-10 hover:scale-110 transition-transform duration-300 hover:shadow-xl">
                        {{ $step->step_number }}
                    </div>
                </div>
                
                <!-- Content Container -->
                <div class="content-container px-2 sm:px-4 md:px-6">
                    <div class="font-bold text-blue-700 text-center mb-2 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl leading-tight">
                        {{ $step->title }}
                    </div>
                    <div class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 text-center leading-relaxed">
                        {{ $step->description }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if($applySteps->last() && $applySteps->last()->button_text)
        <div class="text-center mt-10 animate-fade-in-up animation-delay-800">
            <a href="{{ $applySteps->last()->button_link ?? '#' }}" class="bg-blue-700 text-white px-10 md:px-16 py-3 md:py-6 rounded-full text-xl md:text-2xl font-semibold shadow-lg hover:bg-blue-800 transition-all duration-300 hover:scale-105 hover:shadow-xl inline-block mt-8 font-poppins">
            {{ $applySteps->last()->button_text }}
            </a>
        </div>
        @endif
    </div>
</div>

<footer 
    id="contactus"
    class="pt-12 mt-12 font-poppins text-white animate-fade-in-up"
    style="background: url('{{ asset('img/banner-background.jpg') }}') center/cover no-repeat;"
>
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row flex-wrap justify-between items-stretch gap-8 px-4">
        <div class="flex-[2] min-w-[320px] max-w-[900px] mb-8 md:mb-0 flex flex-col animate-slide-in-left">
            <div class="text-2xl font-bold mb-4">Lokasi Nusantara TV</div>
            <div class="w-full h-80 md:h-[32rem] rounded-xl overflow-hidden mb-4 hover:shadow-2xl transition-shadow duration-300">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.585492366193!2d106.87387437428204!3d-6.186187460609973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5689acb01bd%3A0xdb532d1cdbfa11e7!2sNT%20Tower!5e0!3m2!1sen!2sid!4v1752052938203!5m2!1sen!2sid" 
                    width="100%" 
                    height="100%" 
                    class="border-0 w-full h-full"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>  
        </div>
        <div class="flex-[1] min-w-[220px] max-w-[600px] mb-8 md:mb-0 flex flex-col justify-start animate-slide-in-right">
            <div class="text-2xl font-bold mb-4 font-poppins">Kontak Kami</div>
            <div class="mb-2 font-poppins hover:text-blue-300 transition-colors duration-300">Email: <br>hello@nttower.com</div>
            <div class="mb-2 font-poppins hover:text-blue-300 transition-colors duration-300">Call us at: <br>0881-0100-65128</div>
            <div class="mb-2 font-poppins hover:text-blue-300 transition-colors duration-300">Our Location: <br>Jl. Pulomas Selatan Kav. Blok, Kota Jakarta Timur 13210</div>
            <div class="flex gap-4 mt-4">
                <a href="https://www.facebook.com/share/1DtLHYiaN3/" target="_blank" class="text-white text-2xl inline-block hover:text-blue-700 hover:scale-125 transition-all duration-300">
                    <!-- Facebook SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0" fill="currentColor"/></svg>
                </a>
                <a href="https://www.instagram.com/officialnusantaratv?igsh=dTdxajZpZDNkZHMx" target="_blank" class="text-white text-2xl inline-block hover:text-pink-400 hover:scale-125 transition-all duration-300">
                    <!-- Instagram SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.783 2.295 7.149 2.233 8.415 2.175 8.795 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.363 3.678 1.344c-.98.98-1.213 2.092-1.272 3.373C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.613.059 1.281.292 2.393 1.272 3.373.98.98 2.092 1.213 3.373 1.272C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.281-.059 2.393-.292 3.373-1.272.98-.98 1.213-2.092 1.272-3.373.059-1.281.072-1.69.072-7.613 0-5.923-.013-6.332-.072-7.613-.059-1.281-.292-2.393-1.272-3.373-.98-.98-2.092-1.213-3.373-1.272C15.668.013 15.259 0 12 0z" fill="currentColor"/><path d="M12 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A3.999 3.999 0 1 1 12 8a3.999 3.999 0 0 1 0 7.999zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" fill="currentColor"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/nusantara-tv/" target="_blank" class="text-white text-2xl inline-block hover:text-blue-700 hover:scale-125 transition-all duration-300">
                    <!-- LinkedIn SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M19 0h-14C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5V5c0-2.761-2.239-5-5-5zm-9 19H5V9h5v10zm-2.5-11.268c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5zm15.5 11.268h-5v-5.604c0-1.337-.025-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.968V19h-5V9h4.8v1.367h.069c.669-1.267 2.304-2.604 4.742-2.604 5.073 0 6.012 3.341 6.012 7.686V19z" fill="currentColor"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/20 mt-8 py-4 text-center text-base opacity-85 font-poppins text-white">
        &copy; 2025 Nusantara TV. All rights reserved.
    </div>
</footer>



<!-- Navbar -->
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
  mobileMenu.querySelector('.bg-black\/40').addEventListener('click', function() {
    mobileMenu.classList.add('hidden');
  });
  
  // Smooth scrolling untuk semua anchor links
  function smoothScrollTo(targetId) {
    const target = document.querySelector(targetId);
    if (target) {
      const navbarHeight = document.querySelector('.navbar-sticky').offsetHeight;
      const targetPosition = target.offsetTop - navbarHeight - 20; // 20px extra padding
      
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  }
  
  // Event listener untuk semua anchor links
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      
      // Close mobile menu if open
      if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
      }
      
             // Add active state to clicked link
       document.querySelectorAll('nav a[href^="#"]').forEach(navLink => {
         navLink.classList.remove('text-blue-800', 'font-bold', 'active');
         navLink.classList.add('text-blue-700');
       });
       
       this.classList.remove('text-blue-700');
       this.classList.add('text-blue-800', 'font-bold', 'active');
      
      // Smooth scroll to target
      smoothScrollTo(targetId);
    });
  });
  
  // Active navigation highlighting based on scroll position
  function updateActiveNavLink() {
    const sections = document.querySelectorAll('section, [id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    let current = '';
    const scrollPosition = window.scrollY + 100; // Offset for navbar
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        current = sectionId;
      }
    });
    
    navLinks.forEach(link => {
      link.classList.remove('text-blue-800', 'font-bold', 'active');
      link.classList.add('text-blue-700');
      
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.remove('text-blue-700');
        link.classList.add('text-blue-800', 'font-bold', 'active');
      }
    });
  }
  
  // Update active nav link on scroll
  window.addEventListener('scroll', updateActiveNavLink);
  
  // Navbar scroll effect
  function handleNavbarScroll() {
    const navbar = document.querySelector('.navbar-sticky');
    if (window.scrollY > 100) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }
  
  // Add scroll event for navbar effect
  window.addEventListener('scroll', handleNavbarScroll);
  
  // Initial call to set active link and navbar state
  updateActiveNavLink();
  handleNavbarScroll();
});
</script>

<!-- Scroll-triggered animations -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observe all sections for scroll animations
    document.querySelectorAll('.section-area, .tentang-section, .bidang-section, .persyaratan-section, .testimonial-section, #howtoapply').forEach(section => {
        section.classList.add('animate-on-scroll');
        observer.observe(section);
    });
});
</script>

<!-- Carousel -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.testimonial-dot');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    let active = 0;

    function showCard(idx) {
        cards.forEach((card, i) => {
            if (i === idx) {
                card.classList.remove('opacity-0', 'scale-95', 'translate-x-10', 'z-0');
                card.classList.add('opacity-100', 'scale-100', 'translate-x-0', 'z-10');
            } else {
                card.classList.remove('opacity-100', 'scale-100', 'translate-x-0', 'z-10');
                card.classList.add('opacity-0', 'scale-95', 'translate-x-10', 'z-0');
            }
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('bg-blue-700', i === idx);
            dot.classList.toggle('bg-gray-300', i !== idx);
        });
    }

    function next() {
        active = (active + 1) % cards.length;
        showCard(active);
    }
    function prev() {
        active = (active - 1 + cards.length) % cards.length;
        showCard(active);
    }

    // Inisialisasi
    showCard(active);

    if (nextBtn && prevBtn) {
        nextBtn.addEventListener('click', next);
        prevBtn.addEventListener('click', prev);
    }
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            active = i;
            showCard(active);
        });
    });
});
</script>