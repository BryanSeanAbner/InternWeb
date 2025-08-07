<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Username Address -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Info Box -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
            <div class="flex items-start">
                <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
                <div class="text-sm text-blue-800">
                    <p class="font-medium mb-1">Ketentuan Login:</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Username dan password wajib diisi</li>
                        <li>Maksimal 5 percobaan login dalam 1 menit</li>
                        <li>Jika gagal, tunggu beberapa menit sebelum mencoba lagi</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-password-input id="password" class="block mt-1 w-full"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <script>
    // Login form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        
        let isValid = true;
        
        // Username validation
        if (!username.value.trim()) {
            alert('Username wajib diisi');
            isValid = false;
        }
        
        // Password validation
        if (!password.value.trim()) {
            alert('Password wajib diisi');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Real-time validation feedback
    document.getElementById('username')?.addEventListener('input', function(e) {
        const value = this.value.trim();
        const feedback = document.createElement('div');
        feedback.id = 'username-feedback';
        feedback.className = 'text-sm mt-1';
        
        // Remove existing feedback
        const existingFeedback = document.getElementById('username-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Insert feedback after username input
        this.parentNode.insertBefore(feedback, this.nextSibling);
        
        if (value.length === 0) {
            feedback.textContent = '';
            feedback.className = 'text-sm mt-1';
        } else {
            feedback.textContent = 'Username telah diisi';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    });

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
