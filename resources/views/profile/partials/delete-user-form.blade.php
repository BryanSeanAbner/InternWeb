<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <!-- Info Box -->
    <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
        <div class="flex items-start">
            <i class="fas fa-exclamation-triangle text-red-600 mt-1 mr-3"></i>
            <div class="text-sm text-red-800">
                <p class="font-medium mb-1">Peringatan Penghapusan Akun:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>Tindakan ini tidak dapat dibatalkan</li>
                    <li>Semua data akan dihapus secara permanen</li>
                    <li>Password wajib diisi untuk konfirmasi</li>
                    <li>Pastikan Anda telah menyimpan data penting</li>
                </ul>
            </div>
        </div>
    </div>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <!-- Info Box -->
            <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-4">
                <div class="flex items-start">
                    <i class="fas fa-exclamation-triangle text-red-600 mt-1 mr-3"></i>
                    <div class="text-sm text-red-800">
                        <p class="font-medium mb-1">Konfirmasi Penghapusan:</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Password wajib diisi untuk konfirmasi</li>
                            <li>Tindakan ini tidak dapat dibatalkan</li>
                            <li>Semua data akan dihapus secara permanen</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-password-input
                    id="password"
                    name="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>

        <script>
        // Delete account form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const password = document.getElementById('password');
            
            if (!password.value.trim()) {
                alert('Password wajib diisi untuk konfirmasi penghapusan akun');
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
                feedback.textContent = 'Password telah diisi untuk konfirmasi';
                feedback.className = 'text-blue-600 text-sm mt-1';
            }
        });
        </script>
    </x-modal>
</section>
