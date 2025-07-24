@extends('layouts.app')

@section('content')
<div class="bg-white">
    <header class="navbar-sticky fixed inset-x-0 top-0 z-50">
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
                        <a href="#home" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Home</a>
                        <a href="#berita" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Berita</a>
                        <a href="#tentang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Tentang</a>
                        <a href="#bidang" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Bidang</a>
                        <a href="#persyaratan" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Persyaratan</a>
                        <a href="#testimonial" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Testimonial</a>
                        <a href="#howtoapply" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Cara Mendaftar</a>
                        <a href="#contactus" class="block rounded-lg px-0 py-2 pt-6 text-base font-semibold text-gray-900 hover:bg-gray-50 font-poppins">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header> 
</div>

<div class="relative h-[80vh] md:h-[100vh] flex items-center justify-start bg-cover bg-left-bottom mb-12 pt-24 md:pt-30" style="background-image: url('{{ asset('img/hero.JPG') }}');">
    <div class="ml-4 md:ml-20 max-w-full md:max-w-xl bg-black/30 rounded-xl p-4 md:p-8">
        <h1 class="text-3xl sm:text-4xl md:text-4xl lg:text-5xl font-bold text-white mb-4 drop-shadow-lg leading-tight font-poppins">Mulai Pengalaman <br class="hidden sm:block">Magangmu di <br class="hidden sm:block">Nusantara TV</h1>
        <p class="text-base sm:text-base md:text-lg text-white mb-6 drop-shadow-lg font-poppins">Bergabunglah dalam magang kami untuk pengalaman berharga di dunia penyiaran dan produksi media.</p>
        <a href="#howtoapply" class="bg-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-full text-lg md:text-xl font-semibold shadow-lg hover:bg-blue-800 transition block w-max font-poppins">Cara Mendaftar</a>
    </div>
</div>

<!-- Berita SECTION -->
<div id="berita" class="section-area py-8 container mx-auto px-4">
    <div class="flex flex-col items-center mb-8">
        <div class="text-3xl md:text-4xl font-bold text-blue-700 text-center mb-2 font-poppins">Berita Terkini</div>
        <div class="w-20 h-1 bg-blue-700 rounded mb-8"></div>
    </div>
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="group bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
            <div class="relative">
                <a href="javascript:void(0)" class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                    <img src="/img/hero.JPG" alt="Thumbnail" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:rotate-2" />
                </a>
            </div>
            <span class="block mt-6 pl-4 w-full text-sm text-gray-500 font-poppins">
                Joe Russell - 17 Agt 2024
            </span>
            <h4 class="mb-6 mt-3 pl-4 font-semibold text-[1.5rem]">
                <a href="javascript:void(0)" class="text-gray-900 hover:text-blue-700 font-poppins">
                    Make your team a Design driven company
                </a>
            </h4>
            <p class="mb-4 px-2 pl-4 font-poppins">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
            </p>
            <a href="javascript:void(0)" class="pl-4 mt-2 inline-block text-blue-700 font-semibold hover:underline font-poppins">Read more &rarr;</a>
        </div>
        <div class="group bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
            <div class="relative">
                <a href="javascript:void(0)" class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                    <img src="/img/hero.JPG" alt="Thumbnail" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:rotate-2" />
                </a>
            </div>
            <span class="block mt-6 pl-4 w-full text-sm text-gray-500 font-poppins">
                Joe Russell - 17 Agt 2024
            </span>
            <h4 class="mb-6 mt-3 pl-4 font-semibold text-[1.5rem]">
                <a href="javascript:void(0)" class="text-gray-900 hover:text-blue-700 font-poppins">
                    The newest web framework that changed the world
                </a>
            </h4>
            <p class="mb-4 px-2 pl-4 font-poppins">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
            </p>
            <a href="javascript:void(0)" class="pl-4 mt-2 inline-block text-blue-700 font-semibold hover:underline">Read more &rarr;</a>
        </div>
        <div class="group bg-white rounded-xl shadow-md overflow-hidden flex flex-col">
            <div class="relative">
                <a href="javascript:void(0)" class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                    <img src="/img/hero.JPG" alt="Thumbnail" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 group-hover:rotate-2" />
                </a>
            </div>
            <span class="block mt-6 pl-4 w-full text-sm text-gray-500 font-poppins">
                Joe Russell - 17 Agt 2024
            </span>
            <h4 class="mb-6 mt-3 pl-4 font-semibold text-[1.5rem]">
                <a href="javascript:void(0)" class="text-gray-900 hover:text-blue-700 font-poppins">
                    5 ways to improve user retention for your startup
                </a>
            </h4>
            <p class="mb-4 px-2 pl-4 font-poppins">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
            </p>
            <a href="javascript:void(0)" class="pl-4 mt-2 inline-block text-blue-700 font-semibold hover:underline font-poppins">Read more &rarr;</a>
        </div>
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('posts.index') }}" 
            class="bg-blue-700 text-white px-6 md:px-8 py-3 md:py-4 rounded-full text-lg md:text-xl font-semibold shadow-lg hover:bg-blue-800 transition inline-block mt-8 font-poppins">
            See more
        </a>
    </div>
</div>

<div class="tentang-section" id="tentang">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16 lg:py-20">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins">Tentang Magang</h2>
        <div class="w-20 h-1 bg-blue-700 mx-auto mb-10 rounded"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 justify-items-center items-stretch flex-wrap px-0">
            <div class="bg-white rounded-2xl shadow-lg p-6 md:p-9 text-center flex flex-col items-center min-w-[220px] max-w-xs w-full mx-auto mb-4 md:mb-0">
                <div class="text-3xl mb-4"></div>
                <div class="text-lg font-bold text-blue-700 mb-2"></div>
                <div class="text-base text-gray-700"></div>
            </div>
        </div>
    </div>
</div>

<div class="bidang-section bg-transparent py-16 md:py-20 lg:py-24 mt-0" id="bidang">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins">Kategori Bidang Magang</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded"></div>
        <div class="grid grid-cols-1 justify-items-center">
            <a href="#" class="relative group transition-transform hover:scale-105 w-full max-w-xs rounded-xl overflow-hidden shadow-lg">
                <img src="/img/hero.JPG" alt="Kategori 1" class="object-cover w-full h-40 md:h-48" />
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition"></div>
                <div class="absolute bottom-0 left-0 right-0 p-4 text-lg font-bold text-white font-poppins">Kategori 1</div>
            </a>
        </div>
    </div>
</div>


<div class="persyaratan-section" id="persyaratan" style="background: transparent; padding: 64px 0 48px 0; margin-top: 0;">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins">Persyaratan</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 px-0 md:px-6">
            <di class="bg-white rounded-2xl shadow-lg p-6 md:p-8 flex flex-col items-start min-h-[180px] mb-4 md:mb-0">
                <div class="text-2xl mb-2"></div>
                <div class="text-base md:text-lg font-bold text-blue-700 mb-1 flex items-center">
                    <span class="text-sm text-gray-500 font-normal ml-2"></span>
                </div>
                <div class="text-base text-gray-800 opacity-95"></div>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-section bg-transparent py-16 md:py-20 lg:py-24 mt-0 rounded-[32px]" id="testimonial">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins">
            Apa Kata Mereka tentang Program Magang Ini
        </h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded"></div>
        <!-- Responsive grid: scroll-x di mobile, grid di md+ -->
        <div class="overflow-x-auto">
            <div class="flex md:grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 w-max md:w-auto py-8">
                <div class="bg-white/80 rounded-xl shadow-lg border border-white/40 p-4 md:p-6 max-w-xs w-full flex-shrink-0 flex flex-col items-center text-gray-800">
                    <img src=""
                         alt=""
                         class="w-16 h-16 rounded-full mb-3 border-2 border-white shadow" />
                    <div class="italic text-sm mb-3 text-center text-gray-700"></div>
                    <div class="font-bold text-base mb-1 text-blue-700"></div>
                    <div class="text-xs text-gray-500"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="howtoapply" class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-blue-700 mb-4 font-poppins">Cara Mendaftar</h2>
        <div class="w-32 h-1 bg-blue-700 mx-auto mb-10 rounded"></div>
        <div class="flex flex-col md:flex-row justify-center items-center md:items-center gap-4 md:gap-8 mb-8">
            <div class="w-full max-w-xs mx-auto md:flex-1 md:min-w-[140px] md:max-w-[220px] flex flex-col items-center">
                <div class="w-28 h-28 md:w-32 md:h-32 bg-blue-700 text-white rounded-full flex items-center justify-center text-4xl md:text-5xl font-bold mb-6 shadow-lg">
                    <!-- Nomor step -->
                </div>
                <div class="font-bold text-blue-700 text-center mb-2 text-lg md:text-xl leading-tight">
                    <!-- Judul step -->
                </div>
                <div class="text-base text-gray-600 text-center leading-snug">
                    <!-- Deskripsi step -->
                </div>
            </div>
            <!-- Garis penghubung horizontal di desktop, vertikal di mobile -->
            <div class="hidden md:block w-10 h-1 bg-gray-300 rounded self-center"></div>
            <div class="block md:hidden w-1 h-10 bg-gray-300 rounded mx-auto my-4"></div>
        </div>
        <div class="text-center mt-10">
            <a href="" 
                class="bg-blue-700 text-white px-10 md:px-16 py-3 md:py-6 rounded-full text-xl md:text-2xl font-semibold shadow-lg hover:bg-blue-800 transition inline-block mt-8 font-poppins">
                <!-- Teks tombol -->
            </a>
        </div>
    </div>
</div>

<footer 
    id="contactus"
    class="pt-12 mt-12 text-blue-800 font-poppins"
    style="background: url('{{ asset('storage/banner-background.jpg') }}') center/cover no-repeat;"
>
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row flex-wrap justify-between items-stretch gap-8 px-4">
        <div class="flex-[2] min-w-[320px] max-w-[900px] mb-8 md:mb-0 flex flex-col">
            <div class="text-2xl font-bold mb-4">Lokasi Nusantara TV</div>
            <div class="w-full h-80 md:h-[32rem] rounded-xl overflow-hidden mb-4">
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
        <div class="flex-[1] min-w-[220px] max-w-[600px] mb-8 md:mb-0 flex flex-col justify-start">
            <div class="text-2xl font-bold mb-4 font-poppins">Kontak Kami</div>
            <div class="mb-2 font-poppins">Email: <br>hello@nttower.com</div>
            <div class="mb-2 font-poppins">Call us at: <br>0881-0100-65128</div>
            <div class="mb-2 font-poppins">Our Location: <br>Jl. Pulomas Selatan Kav. Blok, Kota Jakarta Timur 13210</div>
            <div class="flex gap-4 mt-4">
                <a href="https://facebook.com" target="_blank" class="text-blue-700 text-2xl inline-block hover:text-blue-300 transition">
                    <!-- Facebook SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0" fill="currentColor"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" class="text-blue-700 text-2xl inline-block hover:text-pink-300 transition">
                    <!-- Instagram SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.242 1.246-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.242-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.783 2.295 7.149 2.233 8.415 2.175 8.795 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.771.131 4.659.363 3.678 1.344c-.98.98-1.213 2.092-1.272 3.373C2.013 5.668 2 6.077 2 12c0 5.923.013 6.332.072 7.613.059 1.281.292 2.393 1.272 3.373.98.98 2.092 1.213 3.373 1.272C8.332 23.987 8.741 24 12 24s3.668-.013 4.948-.072c1.281-.059 2.393-.292 3.373-1.272.98-.98 1.213-2.092 1.272-3.373.059-1.281.072-1.69.072-7.613 0-5.923-.013-6.332-.072-7.613-.059-1.281-.292-2.393-1.272-3.373-.98-.98-2.092-1.213-3.373-1.272C15.668.013 15.259 0 12 0z" fill="currentColor"/><path d="M12 5.838A6.162 6.162 0 0 0 5.838 12 6.162 6.162 0 0 0 12 18.162 6.162 6.162 0 0 0 18.162 12 6.162 6.162 0 0 0 12 5.838zm0 10.162A3.999 3.999 0 1 1 12 8a3.999 3.999 0 0 1 0 7.999zm6.406-11.845a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" fill="currentColor"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" class="text-blue-700 text-2xl inline-block hover:text-blue-400 transition">
                    <!-- LinkedIn SVG -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none"><path d="M19 0h-14C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5V5c0-2.761-2.239-5-5-5zm-9 19H5V9h5v10zm-2.5-11.268c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5zm15.5 11.268h-5v-5.604c0-1.337-.025-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.968V19h-5V9h4.8v1.367h.069c.669-1.267 2.304-2.604 4.742-2.604 5.073 0 6.012 3.341 6.012 7.686V19z" fill="currentColor"/></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="border-t border-white/20 mt-8 py-4 text-center text-base opacity-85 font-poppins">
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
  // Close on menu link click
  mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', function() {
      mobileMenu.classList.add('hidden');
    });
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