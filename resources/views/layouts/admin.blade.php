<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg fixed h-full z-30">
            <!-- Sidebar Header -->
            <div class="bg-white text-blue-600 p-6 border-b">
                <h1 class="text-xl font-bold text-center">Admin Page</h1>
            </div>
            
            <!-- Navigation -->
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 text-blue-700' : '' }}">
                    <i class="fa-solid fa-gauge mr-3"></i>
                    Dashboard
                </a>
                
                <a href="{{ route('admin.berita.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('admin.berita.*') ? 'bg-blue-100 text-blue-700' : '' }}">
                    <i class="fa-solid fa-newspaper mr-3"></i>
                    Berita
                </a>
                
                <a href="{{ route('admin.kategori.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('admin.kategori.*') ? 'bg-blue-100 text-blue-700' : '' }}">
                    <i class="fa-solid fa-list mr-3"></i>
                    Kategori
                </a>
                
                <a href="{{ route('admin.testimonials.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('admin.testimonials.*') ? 'bg-blue-100 text-blue-700' : '' }}">
                    <i class="fa-solid fa-comment-dots mr-3"></i>
                    Testimoni
                </a>
                
                <a href="{{ route('admin.account-settings.index') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-700 {{ request()->routeIs('admin.account-settings.*') ? 'bg-blue-100 text-blue-700' : '' }}">
                    <i class="fa-solid fa-user-cog mr-3"></i>
                    Pengaturan Akun
                </a>
            </nav>
            
            <!-- Empty bottom area -->
            <div class="absolute bottom-0 w-full h-16"></div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b px-6 py-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">@yield('admin-title', 'Admin Panel')</h2>
                    
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-700 font-medium">Hi, {{ Auth::user()->username }}</span>
                        
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                                <i class="fa-solid fa-sign-out-alt mr-2"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>


</body>
</html> 