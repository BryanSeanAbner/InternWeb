<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Disable CSP untuk development -->
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' data: blob:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: blob:;">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <!-- Vite Assets (Tailwind CSS) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Fallback CSS untuk Railway -->
        @if(app()->environment('production') || !app()->environment('local'))
            <link rel="stylesheet" href="{{ asset('build/assets/app-B7JmuMcs.css') }}">
        @endif
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        
        <!-- Inline CSS untuk memastikan styling dasar -->
        <style>
            /* Fallback styling jika CSS diblokir */
            body { 
                font-family: 'Poppins', sans-serif; 
                margin: 0; 
                padding: 0; 
            }
            .font-poppins { font-family: 'Poppins', sans-serif; }
            .text-blue-700 { color: #1d4ed8 !important; }
            .bg-white { background-color: #ffffff !important; }
            .text-white { color: #ffffff !important; }
            .bg-blue-700 { background-color: #1d4ed8 !important; }
            .hover\:bg-blue-800:hover { background-color: #1e40af !important; }
            .transition-all { transition: all 0.3s ease; }
            .hover\:scale-105:hover { transform: scale(1.05); }
            a { text-decoration: none; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </body>
</html>