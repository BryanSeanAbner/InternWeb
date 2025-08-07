<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <!-- Info Box -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
        <div class="flex items-start">
            <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
            <div class="text-sm text-blue-800">
                <p class="font-medium mb-1">Ketentuan Update Profil:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Nama wajib diisi dan maksimal 255 karakter</li>
                    <li>Email wajib diisi dengan format yang valid</li>
                    <li>Email akan diverifikasi setelah diupdate</li>
                    <li>Pastikan email yang diisi aktif dan dapat diakses</li>
                </ul>
            </div>
        </div>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
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
    // Profile information form validation
    document.querySelector('form[action*="profile.update"]').addEventListener('submit', function(e) {
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        
        let isValid = true;
        
        // Name validation
        if (!name.value.trim()) {
            alert('Nama wajib diisi');
            isValid = false;
        } else if (name.value.length > 255) {
            alert('Nama tidak boleh lebih dari 255 karakter');
            isValid = false;
        }
        
        // Email validation
        if (!email.value.trim()) {
            alert('Email wajib diisi');
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
            alert('Format email tidak valid');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Real-time validation feedback
    document.getElementById('name')?.addEventListener('input', function(e) {
        const value = this.value.trim();
        const feedback = document.createElement('div');
        feedback.id = 'name-feedback';
        feedback.className = 'text-sm mt-1';
        
        // Remove existing feedback
        const existingFeedback = document.getElementById('name-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Insert feedback after name input
        this.parentNode.insertBefore(feedback, this.nextSibling);
        
        if (value.length === 0) {
            feedback.textContent = '';
            feedback.className = 'text-sm mt-1';
        } else if (value.length > 255) {
            feedback.textContent = 'Nama tidak boleh lebih dari 255 karakter';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else {
            feedback.textContent = 'Nama telah diisi';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    });

    document.getElementById('email')?.addEventListener('input', function(e) {
        const value = this.value.trim();
        const feedback = document.createElement('div');
        feedback.id = 'email-feedback';
        feedback.className = 'text-sm mt-1';
        
        // Remove existing feedback
        const existingFeedback = document.getElementById('email-feedback');
        if (existingFeedback) {
            existingFeedback.remove();
        }
        
        // Insert feedback after email input
        this.parentNode.insertBefore(feedback, this.nextSibling);
        
        if (value.length === 0) {
            feedback.textContent = '';
            feedback.className = 'text-sm mt-1';
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
            feedback.textContent = 'Format email tidak valid';
            feedback.className = 'text-red-600 text-sm mt-1';
        } else {
            feedback.textContent = 'Format email valid';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    });
    </script>
</section>
