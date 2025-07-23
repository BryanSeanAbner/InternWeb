@extends('layouts.app')

@section('content')
    <main class="main relative">

        <!-- Hero section -->
        <section id="home"
            class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="-mx-5 flex flex-wrap items-center">
                    <div class="w-full px-5">
                        <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                            <h1
                                class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight">
                                Mulai Pengalaman Magangmu di Nusantara TV
                            </h1>

                            <p class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal">
                                Bergabunglah dengan program magang komprehensif kami dan dapatkan pengalaman berharga dalam
                                dunia penyiaran televisi dan produksi media yang dinamis. </p>

                            <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">
                                <li>
                                    <a href="javascript:void(0)"
                                        class="inline-flex items-center justify-center rounded-md bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]"
                                        role="button">Mulai Mendaftar</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="w-full px-5">
                        <div class="scroll-revealed relative z-10 mx-auto max-w-[845px]">
                            <figure class="mt-16">
                                <img src="{{ asset('img/hero.png') }}" alt="Hero image"
                                    class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
                            </figure>

                            <div class="absolute -left-9 bottom-0 z-[-1]">
                                <img src="{{ asset('img/dots.svg') }}" alt class="w-[120px] opacity-75" />
                            </div>

                            <div class="absolute -right-6 -top-6 z-[-1]">
                                <img src="{{ asset('img/dots.svg') }}" alt class="w-[120px] opacity-75" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
