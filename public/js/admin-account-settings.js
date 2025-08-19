// Admin Account Settings JavaScript

// Password verification state
let isPasswordVisible = false;
let verifiedPassword = '';

// Show password verification modal
function showPasswordVerification() {
    document.getElementById('password-verification-modal').classList.remove('hidden');
    document.getElementById('verification_password').focus();
}

// Hide password verification modal
function hidePasswordVerification() {
    document.getElementById('password-verification-modal').classList.add('hidden');
    document.getElementById('verification-form').reset();
    document.getElementById('verification-error').classList.add('hidden');
}

// Show password after verification
function showPassword() {
    const passwordDisplay = document.getElementById('password-display');
    const toggleIcon = document.getElementById('password-toggle-icon');
    
    if (verifiedPassword) {
        passwordDisplay.textContent = verifiedPassword;
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
        isPasswordVisible = true;
    }
}

// Toggle password visibility
function togglePasswordDisplay() {
    const passwordDisplay = document.getElementById('password-display');
    const toggleIcon = document.getElementById('password-toggle-icon');
    
    if (!isPasswordVisible) {
        // Show verification modal if password not verified
        if (!verifiedPassword) {
            showPasswordVerification();
            return;
        }
        
        // Show password
        passwordDisplay.textContent = verifiedPassword;
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
        isPasswordVisible = true;
    } else {
        // Hide password
        passwordDisplay.textContent = '••••••••';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
        isPasswordVisible = false;
    }
}

// Toggle password field visibility
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = document.getElementById(fieldId + '_icon');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}

// Check password strength
function checkPasswordStrength() {
    const password = document.getElementById('new_password').value;
    const strengthBar = document.getElementById('password-strength-bar');
    const strengthText = document.getElementById('password-strength-text');
    
    // Requirements
    const hasLength = password.length >= 8;
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSpecial = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    
    // Update requirement indicators
    updateRequirement('req-length', hasLength);
    updateRequirement('req-uppercase', hasUppercase);
    updateRequirement('req-lowercase', hasLowercase);
    updateRequirement('req-number', hasNumber);
    updateRequirement('req-special', hasSpecial);
    
    // Calculate strength
    let strength = 0;
    if (hasLength) strength += 20;
    if (hasUppercase) strength += 20;
    if (hasLowercase) strength += 20;
    if (hasNumber) strength += 20;
    if (hasSpecial) strength += 20;
    
    // Update strength bar and text
    strengthBar.style.width = strength + '%';
    
    if (strength === 0) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300';
        strengthText.textContent = 'Kosong';
        strengthText.className = 'text-sm font-medium text-gray-500';
    } else if (strength <= 40) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-red-500';
        strengthText.textContent = 'Lemah';
        strengthText.className = 'text-sm font-medium text-red-500';
    } else if (strength <= 60) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-yellow-500';
        strengthText.textContent = 'Sedang';
        strengthText.className = 'text-sm font-medium text-yellow-600';
    } else if (strength <= 80) {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-blue-500';
        strengthText.textContent = 'Kuat';
        strengthText.className = 'text-sm font-medium text-blue-600';
    } else {
        strengthBar.className = 'h-2 rounded-full transition-all duration-300 bg-green-500';
        strengthText.textContent = 'Sangat Kuat';
        strengthText.className = 'text-sm font-medium text-green-600';
    }
}

// Update requirement indicator
function updateRequirement(elementId, isMet) {
    const element = document.getElementById(elementId);
    const icon = element.querySelector('i');
    
    if (isMet) {
        icon.className = 'fa-solid fa-check text-green-500 mr-2';
        element.className = 'flex items-center text-green-600';
    } else {
        icon.className = 'fa-solid fa-circle text-gray-300 mr-2';
        element.className = 'flex items-center text-gray-600';
    }
}

// Check password confirmation
function checkPasswordConfirmation() {
    const newPassword = document.getElementById('new_password').value;
    const confirmPassword = document.getElementById('new_password_confirmation').value;
    const confirmIcon = document.getElementById('confirm-check-icon');
    const matchMessage = document.getElementById('password-match-message');
    
    if (confirmPassword.length > 0) {
        if (newPassword === confirmPassword) {
            // Password cocok - tampilkan centang hijau
            confirmIcon.className = 'fa-solid fa-check text-green-500';
            matchMessage.classList.remove('hidden');
        } else {
            // Password tidak cocok - tampilkan centang abu-abu
            confirmIcon.className = 'fa-solid fa-check text-gray-400';
            matchMessage.classList.add('hidden');
        }
    } else {
        // Field kosong - tampilkan centang abu-abu
        confirmIcon.className = 'fa-solid fa-check text-gray-400';
        matchMessage.classList.add('hidden');
    }
}

// Handle password verification form submission
document.addEventListener('DOMContentLoaded', function() {
    const verificationForm = document.getElementById('verification-form');
    
    if (verificationForm) {
        verificationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const verificationPassword = formData.get('verification_password');
            
            // Send verification request
            fetch('/admin/account-settings/verify-password', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    verification_password: verificationPassword
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Verification successful
                    verifiedPassword = data.password;
                    showPassword();
                    hidePasswordVerification();
                } else {
                    // Verification failed
                    document.getElementById('verification-error').textContent = data.message;
                    document.getElementById('verification-error').classList.remove('hidden');
                }
            })
            .catch(error => {
                document.getElementById('verification-error').textContent = 'Terjadi kesalahan saat verifikasi';
                document.getElementById('verification-error').classList.remove('hidden');
            });
        });
    }
});
