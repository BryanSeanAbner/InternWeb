// Form Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Character counter untuk alasan mendaftar
    const alasanTextarea = document.getElementById('alasan_mendaftar');
    const charCount = document.getElementById('char-count');
    
    if (alasanTextarea && charCount) {
        // Set initial count
        charCount.textContent = alasanTextarea.value.length;
        
        // Update count on input
        alasanTextarea.addEventListener('input', function() {
            const count = this.value.length;
            charCount.textContent = count;
            
            // Change color based on count
            if (count > 450) {
                charCount.parentElement.classList.remove('bg-blue-100', 'text-blue-700');
                charCount.parentElement.classList.add('bg-red-100', 'text-red-700');
            } else if (count > 400) {
                charCount.parentElement.classList.remove('bg-blue-100', 'text-blue-700', 'bg-red-100', 'text-red-700');
                charCount.parentElement.classList.add('bg-yellow-100', 'text-yellow-700');
            } else {
                charCount.parentElement.classList.remove('bg-yellow-100', 'text-yellow-700', 'bg-red-100', 'text-red-700');
                charCount.parentElement.classList.add('bg-blue-100', 'text-blue-700');
            }
        });
    }
    
    // Smooth scroll untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Form validation enhancement
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500', 'bg-red-50');
                } else {
                    field.classList.remove('border-red-500', 'bg-red-50');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                // Scroll to first error
                const firstError = form.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            }
        });
    }
});
