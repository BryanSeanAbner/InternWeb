<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    <!-- Info Box -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
            <div class="text-sm text-blue-800">
                <p class="font-medium mb-1">Ketentuan Verifikasi Email:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Email verifikasi telah dikirim ke alamat email Anda</li>
                    <li>Klik link verifikasi di email untuk melanjutkan</li>
                    <li>Jika tidak menerima email, klik tombol "Kirim Ulang"</li>
                    <li>Verifikasi email wajib untuk keamanan akun</li>
                </ul>
            </div>
        </div>
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

    <script>
    // Verify email form validation
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            // Add confirmation for logout
            if (this.action.includes('logout')) {
                if (!confirm('Apakah Anda yakin ingin keluar dari aplikasi?')) {
                    e.preventDefault();
                }
            }
        });
    });
    </script>
</x-guest-layout>
