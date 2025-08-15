// Category Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (openBtn && closeBtn && mobileMenu) {
        openBtn.addEventListener('click', function() {
            mobileMenu.classList.remove('hidden');
        });
        
        closeBtn.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
        });
        
        const backdrop = mobileMenu.querySelector('.bg-black\\/40');
        if (backdrop) {
            backdrop.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        }
    }
    
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-xl', 'bg-white/95', 'backdrop-blur-sm');
            } else {
                navbar.classList.remove('shadow-xl', 'bg-white/95', 'backdrop-blur-sm');
            }
        });
    }
    
    // Optimized Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            } else {
                // Remove animation class when element is out of viewport for re-animation
                entry.target.classList.remove('animate-fade-in-up');
            }
        });
    }, observerOptions);
    
    // Observe all elements with scroll-animation class
    document.querySelectorAll('.scroll-animation').forEach(el => {
        observer.observe(el);
    });
});
