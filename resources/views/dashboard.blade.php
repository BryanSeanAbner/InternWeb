<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Selamat Datang, {{ auth()->user()->name }}!</h3>
                            <p class="text-gray-600">Kelola akun dan pengaturan Anda</p>
                        </div>
                        <div class="text-sm text-gray-500">
                            Login terakhir: {{ auth()->user()->updated_at->diffForHumans() }}
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Pengaturan Akun Card -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-user-cog text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-blue-900">Pengaturan Akun</h4>
                                    <p class="text-sm text-blue-700">Kelola username dan password</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('admin.account.index') }}" 
                                   class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors">
                                    <i class="fas fa-arrow-right mr-2"></i>
                                    Buka Pengaturan
                                </a>
                            </div>
                        </div>

                        <!-- Password History Card -->
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-history text-green-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-green-900">Password History</h4>
                                    <p class="text-sm text-green-700">Lihat riwayat password</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('password.history') }}" 
                                   class="inline-flex items-center px-3 py-2 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700 transition-colors">
                                    <i class="fas fa-arrow-right mr-2"></i>
                                    Lihat History
                                </a>
                            </div>
                        </div>

                        <!-- Profile Card -->
                        <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-user text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium text-purple-900">Profile</h4>
                                    <p class="text-sm text-purple-700">Edit informasi profil</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('profile.edit') }}" 
                                   class="inline-flex items-center px-3 py-2 bg-purple-600 text-white text-sm font-medium rounded-md hover:bg-purple-700 transition-colors">
                                    <i class="fas fa-arrow-right mr-2"></i>
                                    Edit Profile
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Info -->
                    <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-medium text-gray-900 mb-3">Informasi Akun</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="text-gray-600">Username:</span>
                                <span class="font-medium text-gray-900 ml-2">{{ auth()->user()->name }}</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Email:</span>
                                <span class="font-medium text-gray-900 ml-2">{{ auth()->user()->email }}</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Bergabung sejak:</span>
                                <span class="font-medium text-gray-900 ml-2">{{ auth()->user()->created_at->format('d M Y') }}</span>
                            </div>
                            <div>
                                <span class="text-gray-600">Terakhir update:</span>
                                <span class="font-medium text-gray-900 ml-2">{{ auth()->user()->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
