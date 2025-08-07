<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <!-- Info Box -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
            <div class="text-sm text-blue-800">
                <p class="font-medium mb-1">Ketentuan Password Baru:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Minimal 8 karakter</li>
                    <li>Harus mengandung setidaknya satu huruf besar</li>
                    <li>Harus mengandung setidaknya satu huruf kecil</li>
                    <li>Harus mengandung setidaknya satu angka</li>
                    <li>Harus mengandung setidaknya satu simbol</li>
                    <li>Tidak boleh sama dengan password sebelumnya</li>
                </ul>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-password-input id="update_password_current_password" name="current_password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-password-input id="update_password_password" name="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-password-input id="update_password_password_confirmation" name="password_confirmation" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

    <script>
    // Profile password form validation
    document.querySelector('form').addEventListener('submit', function(e) {
        const currentPassword = document.getElementById('update_password_current_password');
        const password = document.getElementById('update_password_password');
        const passwordConfirmation = document.getElementById('update_password_password_confirmation');
        
        let isValid = true;
        
        // Current password validation
        if (!currentPassword.value.trim()) {
            alert('Password saat ini wajib diisi');
            isValid = false;
        }
        
        // New password validation
        if (password.value.length < 8) {
            alert('Password baru minimal 8 karakter');
            isValid = false;
        } else if (!/[a-z]/.test(password.value)) {
            alert('Password baru harus mengandung setidaknya satu huruf kecil');
            isValid = false;
        } else if (!/[A-Z]/.test(password.value)) {
            alert('Password baru harus mengandung setidaknya satu huruf besar');
            isValid = false;
        } else if (!/[0-9]/.test(password.value)) {
            alert('Password baru harus mengandung setidaknya satu angka');
            isValid = false;
        } else if (!/[^a-zA-Z0-9]/.test(password.value)) {
            alert('Password baru harus mengandung setidaknya satu simbol');
            isValid = false;
        }
        
        // Password confirmation validation
        if (password.value !== passwordConfirmation.value) {
            alert('Konfirmasi password tidak sesuai');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Real-time password validation feedback
    document.getElementById('update_password_password')?.addEventListener('input', function(e) {
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
        } else if (value.length < 8) {
            feedback.textContent = 'Password minimal 8 karakter';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else if (!/[a-z]/.test(value)) {
            feedback.textContent = 'Password harus mengandung setidaknya satu huruf kecil';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else if (!/[A-Z]/.test(value)) {
            feedback.textContent = 'Password harus mengandung setidaknya satu huruf besar';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else if (!/[0-9]/.test(value)) {
            feedback.textContent = 'Password harus mengandung setidaknya satu angka';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else if (!/[^a-zA-Z0-9]/.test(value)) {
            feedback.textContent = 'Password harus mengandung setidaknya satu simbol';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else {
            feedback.textContent = 'Password kuat dan aman';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    });

    // Password confirmation validation
    document.getElementById('update_password_password_confirmation')?.addEventListener('input', function(e) {
        const value = this.value;
        const password = document.getElementById('update_password_password').value;
        const feedback = document.createElement('div');
        feedback.id = 'password-confirmation-feedback';
        feedback.className = 'text-sm mt-1';
        
        // Remove existing feedback
        const existingFeedback = document.getElementById('password-confirmation-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Insert feedback after password confirmation input
        this.parentNode.insertBefore(feedback, this.nextSibling);
        
        if (value.length === 0) {
            feedback.textContent = '';
            feedback.className = 'text-sm mt-1';
        } else if (value !== password) {
            feedback.textContent = 'Konfirmasi password tidak sesuai';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else {
            feedback.textContent = 'Konfirmasi password sesuai';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    });

    // Current password validation
    document.getElementById('update_password_current_password')?.addEventListener('input', function(e) {
        const value = this.value;
        const feedback = document.createElement('div');
        feedback.id = 'current-password-feedback';
        feedback.className = 'text-sm mt-1';
        
        // Remove existing feedback
        const existingFeedback = document.getElementById('current-password-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Insert feedback after current password input
        this.parentNode.insertBefore(feedback, this.nextSibling);
        
        if (value.length === 0) {
            feedback.textContent = '';
            feedback.className = 'text-sm mt-1';
        } else {
            feedback.textContent = 'Password saat ini telah diisi';
            feedback.className = 'text-blue-600 text-sm mt-1';
        }
    });
    </script>

    <div class="mt-6 pt-6 border-t border-gray-200">
        <a href="{{ route('password.history') }}" class="text-sm text-indigo-600 hover:text-indigo-500">
            {{ __('Lihat Riwayat Password →') }}
        </a>
    </div>
</section>
