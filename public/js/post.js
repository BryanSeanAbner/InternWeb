// Post Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('mobile-menu-open');
    const closeBtn = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const navbar = document.getElementById('navbar');
    
    if (openBtn && closeBtn && mobileMenu) {
        openBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.remove('hidden');
        });
        
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            mobileMenu.classList.add('hidden');
        });
        
        const backdrop = mobileMenu.querySelector('.bg-black\\/40');
        if (backdrop) {
            backdrop.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        }
        
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    }
    
    // Navbar scroll effect
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-xl', 'bg-white/95', 'backdrop-blur-sm');
            } else {
                navbar.classList.remove('shadow-xl', 'bg-white/95', 'backdrop-blur-sm');
            }
        });
    }
    
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, observerOptions);
    
    // Observe all elements with scroll-animation class
    document.querySelectorAll('.scroll-animation').forEach(el => {
        observer.observe(el);
    });
});
