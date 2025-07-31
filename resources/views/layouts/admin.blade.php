<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 min-h-screen">
    <div id="app" class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed z-30 inset-y-0 left-0 w-64 bg-white border-r flex flex-col transition-transform duration-300 ease-in-out -translate-x-full md:translate-x-0 md:static md:inset-0">
            <div class="h-20 flex items-center justify-center border-b">
                <span class="font-bold text-xl tracking-wide text-blue-700 font-poppins">Nusantara TV Admin</span>
            </div>
            <nav class="flex-1 py-6 px-4 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-blue-50 font-medium text-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 font-bold text-blue-700' : '' }}">
                    <i class="fa-solid fa-gauge"></i> Dashboard
                </a>
                <a href="{{ route('admin.berita.index') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-blue-50 font-medium text-gray-700 {{ request()->routeIs('admin.berita.*') ? 'bg-blue-100 font-bold text-blue-700' : '' }}">
                    <i class="fa-solid fa-newspaper"></i> Berita
                </a>
                <a href="{{ route('admin.kategori.index') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-blue-50 font-medium text-gray-700 {{ request()->routeIs('admin.kategori.*') ? 'bg-blue-100 font-bold text-blue-700' : '' }}">
                    <i class="fa-solid fa-list"></i> Kategori
                </a>
                <a href="{{ route('admin.testimonials.index') }}" class="flex items-center gap-3 py-2 px-4 rounded-lg hover:bg-blue-50 font-medium text-gray-700 {{ request()->routeIs('admin.testimonials.*') ? 'bg-blue-100 font-bold text-blue-700' : '' }}">
                    <i class="fa-solid fa-comment-dots"></i> Testimoni
                </a>
            </nav>
        </aside>
        <!-- Overlay for mobile -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-30 z-20 hidden md:hidden" onclick="toggleSidebar()"></div>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="h-20 bg-white flex items-center justify-between px-4 md:px-8 border-b shadow-sm sticky top-0 z-10">
                <div class="flex items-center gap-4">
                    <button id="sidebar-toggle" class="block md:hidden text-2xl text-gray-500 focus:outline-none" onclick="toggleSidebar()"><i class="fa fa-bars"></i></button>
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('admin-title', 'Admin Panel')</h1>
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-gray-700 font-medium pl-6 text-sm md:text-base font-poppins">Hi, Admin Nusantara TV</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="ml-3 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm md:text-base">Logout</button>
                    </form>
                </div>
            </header>
            <!-- Page Content -->
            <main class="flex-1 p-2 sm:p-4 md:p-8 bg-gray-50">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
                overlay.classList.add('hidden');
            }
        }
        // Close sidebar on resize to desktop
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');
                overlay.classList.add('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
            }
        });
    </script>
</body>
</html> 