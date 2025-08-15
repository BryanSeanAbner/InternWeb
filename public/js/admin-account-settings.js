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
