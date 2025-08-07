<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <!-- Info Box -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
            <div class="text-sm text-blue-800">
                <p class="font-medium mb-1">Ketentuan Konfirmasi Password:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Password wajib diisi untuk melanjutkan</li>
                    <li>Password harus sesuai dengan akun Anda</li>
                    <li>Ini adalah langkah keamanan tambahan</li>
                </ul>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-password-input id="password" class="block mt-1 w-full"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>

    <script>
    // Confirm password form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const password = document.getElementById('password');
        
        if (!password.value.trim()) {
            alert('Password wajib diisi');
            e.preventDefault();
        }
    });

    // Real-time validation feedback
    document.getElementById('password')?.addEventListener('input', function(e) {
        const value = this.value;
        const feedback = document.createElement('div');
        feedback.id = 'password-feedback';
        feedback.className = 'text-sm mt-1';
        
        // Remove existing feedback
        const existingFeedback = document.getElementById('password-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Insert feedback after password input
        this.parentNode.insertBefore(feedback, this.nextSibling);
        
        if (value.length === 0) {
            feedback.textContent = '';
            feedback.className = 'text-sm mt-1';
        } else {
            feedback.textContent = 'Password telah diisi';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    });
    </script>
</x-guest-layout>
