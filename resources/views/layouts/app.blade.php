<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
{{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head> --}}

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Copyright" content="Inazuma" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Ranyeh" />
    <meta name="rating" content="general" />
    <meta name="language" content="English" />
    <meta name="application-name" content="Inazuma" />
    <meta name="description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
    <meta name="keywords" content="company" />
    <meta name="twitter:title" content="Inazuma | Tailwind CSS Company Landing Page" />
    <meta name="twitter:description" content="Tailwind CSS Company Landing Page Template by Ranyeh." />
    <meta name="twitter:image" content="{{asset("img/inazuma-cover.png")}}" />
    <meta content="Inazuma | Tailwind CSS Company Landing Page" property="og:title" />
    <meta content="Inazuma" property="og:site_name" />
    <meta content="Tailwind CSS Company Landing Page Template by Ranyeh." property="og:description" />
    <meta content={{asset("img/inazuma-cover.png")}}" property="og:image" />
    <meta content="https://ranyeh24.github.io/inazuma-tailwind" property="og:url" />
    <meta content="website" property="og:type" />

    <meta name="msapplication-TileColor" content="#3d63dd" />
    <meta name="msapplication-TileImage" content="{{asset("favicon/mstile-144x144.png")}}" />
    <meta name="theme-color" content="#3d63dd" />

    <!-- Page title -->
    <title>Inazuma | Tailwind CSS Company Landing Page</title>

    <!-- Canonical -->
    <link rel="canonical" href="https://ranyeh24.github.io/inazuma-tailwind" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("favicon/apple-touch-icon.png")}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("favicon/favicon-32x32.png")}}" />
    <link rel="icon" type="image/png" sizes="194x194" href="{{asset("favicon/favicon-194x194.png")}}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("favicon/android-chrome-192x192.png")}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("favicon/favicon-16x16.png")}}" />
    <link rel="manifest" href="{{asset("favicon/site.webmanifest.json")}}" />
    <link rel="mask-icon" href="{{asset("favicon/safari-pinned-tab.svg")}}" color="#3d63dd" />

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <link rel="stylesheet" href="{{("css/main.css")}}" />
</head>

<header class="ic-navbar absolute left-0 top-0 z-40 flex w-full items-center bg-transparent" role="banner"
    aria-label="Navigation bar">
    <div class="container">
        <div class="ic-navbar-container relative -mx-5 flex items-center justify-between">
            <div class="w-60 lg:w-56 max-w-full px-5">
                <a href="." class="ic-navbar-logo block w-full py-5 text-primary-color">
                    <svg class="w-full fill-current" id="NavbarBrand" data-name="NavbarBrand"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 118.11">
                        <path
                            d="M272.26,29.77h14.86V58q0,8.24,1.13,11.44a10,10,0,0,0,3.64,5,10.44,10.44,0,0,0,6.18,1.77,10.75,10.75,0,0,0,6.23-1.75,10.26,10.26,0,0,0,3.81-5.14q.92-2.52.91-10.82V29.77h14.7V54.59q0,15.33-2.42,21a23,23,0,0,1-8.72,10.58q-5.76,3.68-14.64,3.68-9.65,0-15.59-4.3a22.79,22.79,0,0,1-8.37-12q-1.73-5.32-1.72-19.37Z" />
                        <path
                            d="M338.36,29.77h14.69V36.5a25.29,25.29,0,0,1,8.38-6.19,24.53,24.53,0,0,1,10.05-2A18.63,18.63,0,0,1,381.39,31a19.46,19.46,0,0,1,7.11,7.86A23.64,23.64,0,0,1,397.09,31a23.34,23.34,0,0,1,11.12-2.69,20.65,20.65,0,0,1,11,2.9A16.79,16.79,0,0,1,426,38.76q2.08,4.68,2.08,15.24V88.34h-14.8V58.62q0-9.94-2.48-13.48t-7.43-3.52a11.22,11.22,0,0,0-6.75,2.15,12.66,12.66,0,0,0-4.44,5.95q-1.45,3.8-1.46,12.19V88.34h-14.8V60q0-7.86-1.16-11.38a10.27,10.27,0,0,0-3.48-5.25,9.15,9.15,0,0,0-5.61-1.72A11,11,0,0,0,359,43.8a13,13,0,0,0-4.48,6.1q-1.49,3.93-1.49,12.38V88.34H338.36Z" />
                        <path
                            d="M485.31,29.77H500V88.34H485.31V82.15A29,29,0,0,1,476.68,88a24.24,24.24,0,0,1-9.39,1.8q-11.34,0-19.62-8.8t-8.28-21.88q0-13.56,8-22.23a25.55,25.55,0,0,1,19.47-8.66,24.72,24.72,0,0,1,9.89,2,27.17,27.17,0,0,1,8.55,6ZM469.86,41.83a14.85,14.85,0,0,0-11.32,4.82A17.33,17.33,0,0,0,454,59a17.55,17.55,0,0,0,4.59,12.49,14.85,14.85,0,0,0,11.29,4.9,15.15,15.15,0,0,0,11.48-4.82Q486,66.76,486,59q0-7.65-4.56-12.38A15.31,15.31,0,0,0,469.86,41.83Z" />
                        <path
                            d="M28,29.77h14.7v6a35.37,35.37,0,0,1,9-5.87,22.09,22.09,0,0,1,8.31-1.64,20.09,20.09,0,0,1,14.78,6.08Q80,39.51,80,49.64v38.7H65.45V62.69q0-10.48-.94-13.92a9.57,9.57,0,0,0-3.27-5.25,9.18,9.18,0,0,0-5.78-1.8,10.82,10.82,0,0,0-7.65,3A16,16,0,0,0,43.38,53q-.65,2.74-.64,11.88v23.5H28Z" />
                        <path
                            d="M137.42,29.77h14.69V88.34H137.42V82.15A29,29,0,0,1,128.79,88a24.19,24.19,0,0,1-9.38,1.8q-11.34,0-19.63-8.8T91.5,59.16q0-13.56,8-22.23A25.53,25.53,0,0,1,119,28.27a24.69,24.69,0,0,1,9.89,2,27.17,27.17,0,0,1,8.55,6ZM122,41.83a14.87,14.87,0,0,0-11.32,4.82A17.37,17.37,0,0,0,106.15,59a17.54,17.54,0,0,0,4.58,12.49A14.85,14.85,0,0,0,122,76.39a15.12,15.12,0,0,0,11.48-4.82q4.56-4.81,4.56-12.62,0-7.65-4.56-12.38A15.3,15.3,0,0,0,122,41.83Z" />
                        <rect y="29.77" width="14.69" height="58.56" />
                        <polygon
                            points="226.39 62.27 232.8 68.67 282.23 118.11 163.48 89.2 196.84 55.84 190.43 49.44 140.99 0 259.75 28.91 226.39 62.27"
                            id="NavbarBrandIcon" />
                    </svg>
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-5">
                <div>
                    <button type="button"
                        class="ic-navbar-toggler absolute right-4 top-1/2 block -translate-y-1/2 rounded-md px-3 py-[6px] text-[22px]/none text-primary-color ring-primary focus:ring-2 lg:hidden"
                        data-web-toggle="navbar-collapse" data-web-target="navbarMenu" aria-expanded="false"
                        aria-label="Toggle navigation menu">
                        <i class="lni lni-menu"></i>
                    </button>

                    <nav id="navbarMenu"
                        class="ic-navbar-collapse absolute right-4 top-[80px] w-full max-w-[250px] rounded-lg hidden bg-primary-light-1 py-5 shadow-lg dark:bg-primary-dark-1 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6">
                        <ul class="block lg:flex" role="menu" aria-label="Navigation menu">
                            <li class="group relative">
                                <a href="#home"
                                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 active"
                                    role="menuitem">Home</a>
                            </li>

                            <li class="group relative">
                                <a href="#services"
                                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                                    role="menuitem">Services</a>
                            </li>

                            <li class="group relative">
                                <a href="#portfolio"
                                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                                    role="menuitem">Portfolio</a>
                            </li>

                            <li class="group relative">
                                <a href="#pricing"
                                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                                    role="menuitem">Pricing</a>
                            </li>

                            <li class="group relative">
                                <a href="#team"
                                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                                    role="menuitem">Team</a>
                            </li>

                            <li class="group relative">
                                <a href="#contact"
                                    class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                                    role="menuitem">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center justify-end pr-[52px] lg:pr-0">
                    <button type="button" class="inline-flex items-center text-primary-color text-[24px]/none"
                        aria-label="Switch theme" data-web-trigger="web-theme"></button>
                    <div class="hidden sm:flex">
                        <a href="javascript:void(0)"
                            class="btn-navbar ml-5 px-6 py-3 rounded-md bg-primary-color bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary"
                            role="button">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
