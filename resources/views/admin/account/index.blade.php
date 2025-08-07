@extends('layouts.admin')

@section('admin-title', 'Pengaturan Akun')

@section('content')
    <!-- Header -->
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Ubah Username & Password Akun</h1>
        <p class="text-gray-600 mb-6">Kelola pengaturan akun dan keamanan</p>

    <!-- Success Message -->
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif

    <!-- Error Message -->
    @if(session('error'))
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                {{ session('error') }}
            </div>
        </div>
    @endif


    <!-- Change Username Card -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-8">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                <i class="fas fa-user text-green-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Ubah Username</h2>
                <p class="text-gray-600 text-sm">Ganti username akun Anda</p>
            </div>
        </div>

        <form action="{{ route('admin.account.change-username') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                    Username Baru
                </label>
                <input type="text" 
                       id="username" 
                       name="username" 
                       value="{{ old('username', auth()->user()->name) }}"
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors"
                       placeholder="Contoh: admin123, user_name"
                       required>
                @error('username')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
                <div id="username-feedback"></div>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
                    <div class="text-sm text-blue-800">
                        <p class="font-medium mb-1">Ketentuan Username:</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>Minimal 3 karakter</li>
                            <li>Maksimal 50 karakter</li>
                            <li>Hanya boleh menggunakan huruf (a-z, A-Z), angka (0-9), dan underscore (_)</li>
                            <li>Contoh: admin123, user_name, Admin2024</li>
                        </ul>
                    </div>
                </div>
            </div>

            <button type="submit" 
                    class="w-full bg-green-600 text-white py-3 px-4 rounded-lg hover:bg-green-700 focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-colors font-medium">
                <i class="fas fa-user-edit mr-2"></i>
                Ubah Username
            </button>
        </form>

    <!-- Change Password Card -->
        <div class="flex items-center mb-6 mt-10">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                <i class="fas fa-key text-blue-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Ubah Password</h2>
                <p class="text-gray-600 text-sm">Ganti password akun Anda</p>
            </div>
        </div>

        <form action="{{ route('admin.account.change-password') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password Saat Ini
                </label>
                <div class="relative">
                    <input type="password" 
                           id="current_password" 
                           name="current_password" 
                           class="w-full px-4 py-3 pr-14 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                           placeholder="Masukkan password saat ini"
                           required>
                    <button type="button" 
                            onclick="togglePassword('current_password')"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 z-10">
                        <i class="fas fa-eye-slash" id="current_password_icon"></i>
                    </button>
                </div>
                @error('current_password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password Baru
                </label>
                <div class="relative">
                    <input type="password" 
                           id="password" 
                           name="password" 
                           class="w-full px-4 py-3 pr-14 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                           placeholder="Masukkan password baru"
                           required>
                    <button type="button" 
                            onclick="togglePassword('password')"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 z-10">
                        <i class="fas fa-eye-slash" id="password_icon"></i>
                    </button>
                </div>
                @error('password')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">
                    Konfirmasi Password Baru
                </label>
                <div class="relative">
                    <input type="password" 
                           id="password_confirmation" 
                           name="password_confirmation" 
                           class="w-full px-4 py-3 pr-14 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                           placeholder="Konfirmasi password baru"
                           required>
                    <button type="button" 
                            onclick="togglePassword('password_confirmation')"
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 z-10">
                        <i class="fas fa-eye-slash" id="password_confirmation_icon"></i>
                    </button>
                </div>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                <div class="flex items-start">
                    <i class="fas fa-info-circle text-blue-600 mt-1 mr-3"></i>
                    <div class="text-sm text-blue-800">
                        <p class="font-medium mb-1">Ketentuan Password:</p>
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

            <button type="submit" 
                    class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors font-medium">
                <i class="fas fa-save mr-2"></i>
                Ubah Password
            </button>
        </form>
    </div>

<!-- Informasi Akun Card -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                <i class="fas fa-user text-green-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-xl font-semibold text-gray-900">Informasi Akun</h2>
                <p class="text-gray-600 text-sm">Detail akun Anda</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-user-circle text-blue-500 mr-2 bg-blue-50 p-2 rounded"></i>Username
                </label>
                <p class="text-gray-900 font-medium">{{ auth()->user()->name }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-lock text-red-500 mr-2 bg-red-50 p-2 rounded"></i>Password
                </label>
                <div class="flex items-center space-x-2">
                    <span id="password_display" class="text-gray-900 font-medium transition-all duration-200">••••••••</span>
                    <button type="button" 
                            onclick="toggleDisplayPassword()"
                            class="text-gray-500 hover:text-red-500 transition-colors p-1 rounded-full hover:bg-red-50"
                            title="Password yang tersimpan">
                        <i class="fas fa-eye-slash" id="password_display_icon"></i>
                    </button>
                </div>
                <p class="text-xs text-blue-500 mt-1">
                    <i class="fas fa-info-circle mr-1"></i>
                    Password akan tersimpan saat login atau update password
                </p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    <i class="fas fa-history text-purple-500 mr-2 bg-purple-50 p-1 rounded"></i>Terakhir Update
                </label>
                <p class="text-gray-900 font-medium">{{ auth()->user()->updated_at->diffForHumans() }}</p>
            </div>
        </div>
    </div>

<script>
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(inputId + '_icon');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}



// Function to toggle password display in informasi akun
function toggleDisplayPassword() {
    const passwordDisplay = document.getElementById('password_display');
    const passwordIcon = document.getElementById('password_display_icon');
    const savedPassword = '{{ $savedPassword }}';
    
    if (passwordDisplay && passwordIcon) {
        if (passwordIcon.classList.contains('fa-eye-slash')) {
            // Show password
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
            
            // Show the actual password
            if (savedPassword && savedPassword !== '••••••••') {
                passwordDisplay.textContent = savedPassword;
            } else {
                passwordDisplay.textContent = '••••••••';
            }
        } else {
            // Hide password
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
            passwordDisplay.textContent = '••••••••';
        }
    }
}



// Username validation for main form
document.getElementById('username')?.addEventListener('input', function(e) {
    const value = this.value;
    const regex = /^[a-zA-Z0-9_]*$/;
    const feedback = document.getElementById('username-feedback');
    
    if (!regex.test(value)) {
        this.setCustomValidity('Username hanya boleh menggunakan huruf, angka, dan underscore (_)');
        this.classList.add('border-red-500');
        feedback.textContent = 'Username hanya boleh menggunakan huruf, angka, dan underscore (_)';
        feedback.className = 'text-red-600 text-sm mt-1';
    } else if (value.length < 3) {
        this.setCustomValidity('Username minimal 3 karakter');
        this.classList.add('border-red-500');
        feedback.textContent = 'Username minimal 3 karakter';
        feedback.className = 'text-red-600 text-sm mt-1';
    } else if (value.length > 50) {
        this.setCustomValidity('Username maksimal 50 karakter');
        this.classList.add('border-red-500');
        feedback.textContent = 'Username maksimal 50 karakter';
        feedback.className = 'text-red-600 text-sm mt-1';
    } else if (value.length === 0) {
        this.setCustomValidity('');
        this.classList.remove('border-red-500');
        feedback.textContent = '';
    } else {
        this.setCustomValidity('');
        this.classList.remove('border-red-500');
        
        // Check if username is same as current user
        const currentUsername = '{{ auth()->user()->name }}';
        if (value === currentUsername) {
            feedback.textContent = 'Username sama dengan yang sekarang';
            feedback.className = 'text-blue-600 text-sm mt-1';
        } else {
            feedback.textContent = 'Username valid dan siap digunakan (akan divalidasi saat submit)';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    }
});

// Real-time validation feedback on blur for main form
document.getElementById('username')?.addEventListener('blur', function(e) {
    const value = this.value;
    const feedback = document.getElementById('username-feedback');
    
    if (value.length === 0) {
        feedback.textContent = '';
    }
});

// Password validation feedback
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
            feedback.textContent = 'Password kuat dan aman (akan divalidasi saat submit)';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
    
    // Trigger password confirmation validation
    const confirmPassword = document.getElementById('password_confirmation');
    if (confirmPassword && confirmPassword.value) {
        confirmPassword.dispatchEvent(new Event('input'));
    }
});

// Password confirmation validation
document.getElementById('password_confirmation')?.addEventListener('input', function(e) {
    const value = this.value;
    const password = document.getElementById('password').value;
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
            feedback.textContent = 'Konfirmasi password sesuai (akan divalidasi saat submit)';
            feedback.className = 'text-green-600 text-sm mt-1';
        }
});

// Current password validation
document.getElementById('current_password')?.addEventListener('input', function(e) {
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
    } else if (value.length < 1) {
        feedback.textContent = 'Password saat ini wajib diisi';
        feedback.className = 'text-red-600 text-sm mt-1';
    } else {
        feedback.textContent = 'Password saat ini telah diisi (akan divalidasi saat submit)';
        feedback.className = 'text-blue-600 text-sm mt-1';
    }
});

// Form validation before submit
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const passwordConfirmation = document.getElementById('password_confirmation');
        const currentPassword = document.getElementById('current_password');
        
        let isValid = true;
        
        // Username validation
        if (username && username.value) {
            const regex = /^[a-zA-Z0-9_]+$/;
            if (!regex.test(username.value)) {
                alert('Username hanya boleh menggunakan huruf, angka, dan underscore (_)');
                isValid = false;
            } else if (username.value.length < 3) {
                alert('Username minimal 3 karakter');
                isValid = false;
            } else if (username.value.length > 50) {
                alert('Username maksimal 50 karakter');
                isValid = false;
            }
        }
        
        // Password validation
        if (password && password.value) {
            if (password.value.length < 8) {
                alert('Password minimal 8 karakter');
                isValid = false;
            } else if (!/[a-z]/.test(password.value)) {
                alert('Password harus mengandung setidaknya satu huruf kecil');
                isValid = false;
            } else if (!/[A-Z]/.test(password.value)) {
                alert('Password harus mengandung setidaknya satu huruf besar');
                isValid = false;
            } else if (!/[0-9]/.test(password.value)) {
                alert('Password harus mengandung setidaknya satu angka');
                isValid = false;
            } else if (!/[^a-zA-Z0-9]/.test(password.value)) {
                alert('Password harus mengandung setidaknya satu simbol');
                isValid = false;
            }
        }
        
        // Password confirmation validation
        if (password && passwordConfirmation && password.value !== passwordConfirmation.value) {
            alert('Konfirmasi password tidak sesuai');
            isValid = false;
        }
        
        // Current password validation
        if (currentPassword && currentPassword.value.length === 0) {
            alert('Password saat ini wajib diisi');
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault();
        } else {
            // Show confirmation message
            if (this.action.includes('change-username')) {
                if (confirm('Apakah Anda yakin ingin mengubah username? Perubahan ini akan mempengaruhi login Anda.')) {
                    // Continue with form submission
                } else {
                    e.preventDefault();
                }
            } else if (this.action.includes('change-password')) {
                if (confirm('Apakah Anda yakin ingin mengubah password? Password baru akan digunakan untuk login selanjutnya.')) {
                    // Continue with form submission
                } else {
                    e.preventDefault();
                }
            }
        }
    });
});




</script>
@endsection 