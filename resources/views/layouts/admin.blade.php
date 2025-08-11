<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('laravel-logo.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow h-screen flex flex-col">
            <div class="h-16 flex items-center justify-center border-b">
                <span class="font-bold text-lg tracking-wide">Admin Page</span>
            </div>
            <nav class="flex-1 py-6 px-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-blue-100 font-medium text-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-50 font-bold text-blue-700' : '' }}">Dashboard</a>
                <a href="{{ route('admin.berita.index') }}" class="block py-2 px-4 rounded hover:bg-blue-100 font-medium text-gray-700 {{ request()->routeIs('admin.berita.*') ? 'bg-blue-50 font-bold text-blue-700' : '' }}">Berita</a>
                <a href="{{ route('admin.kategori.index') }}" class="block py-2 px-4 rounded hover:bg-blue-100 font-medium text-gray-700 {{ request()->routeIs('admin.kategori.*') ? 'bg-blue-50 font-bold text-blue-700' : '' }}">Kategori</a>
                <a href="{{ route('admin.testimonials.index') }}" class="block py-2 px-4 rounded hover:bg-blue-100 font-medium text-gray-700 {{ request()->routeIs('admin.testimonials.*') ? 'bg-blue-50 font-bold text-blue-700' : '' }}">Testimoni</a>
            </nav>
        </aside>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="h-16 bg-blue-600 flex items-center justify-between px-8 shadow">
                <h1 class="text-white text-xl font-semibold">@yield('admin-title', 'Admin Panel')</h1>
                <div class="flex items-center gap-2">
                    <span class="text-white">Hi, Admin Nusantara TV</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="ml-2 px-3 py-1 bg-white text-blue-600 rounded hover:bg-blue-50">Logout</button>
                    </form>
                </div>
            </header>
            <!-- Page Content -->
            <main class="flex-1 p-8">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
function toggleDropdown(id) {
    document.getElementById(id).classList.toggle('hidden');
}
</script>
</body>
</html> 