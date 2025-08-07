<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat Password') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Daftar Password yang Tersimpan') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Berikut adalah daftar password yang pernah digunakan untuk akun ini. Password akan tetap tersimpan meskipun Anda logout.') }}
                        </p>
                    </header>

                    <div class="mt-6 space-y-4">
                        @if($passwordHistories->count() > 0)
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-sm font-medium text-gray-700 mb-3">
                                    {{ __('Password yang pernah digunakan:') }}
                                </h3>
                                
                                <div class="space-y-2">
                                    @foreach($passwordHistories as $history)
                                        <div class="flex items-center justify-between p-3 bg-white rounded border">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                                <span class="text-sm text-gray-600">
                                                    {{ __('Password') }} #{{ $loop->iteration }}
                                                </span>
                                            </div>
                                            <span class="text-xs text-gray-500">
                                                {{ $history->created_at->format('d M Y H:i') }}
                                            </span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="text-center py-8">
                                <div class="text-gray-400 mb-4">
                                    <svg class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <h3 class="text-sm font-medium text-gray-900 mb-2">
                                    {{ __('Belum ada riwayat password') }}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    {{ __('Password akan mulai tersimpan setelah Anda login atau mengubah password.') }}
                                </p>
                            </div>
                        @endif

                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-between">
                                <a href="{{ route('profile.edit') }}" class="text-sm text-indigo-600 hover:text-indigo-500">
                                    {{ __('← Kembali ke Profile') }}
                                </a>
                                
                                <div class="text-xs text-gray-500">
                                    {{ __('Total:') }} {{ $passwordHistories->count() }} {{ __('password') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 