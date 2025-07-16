// Welcome alert
alert('Welcome to home page !');

// Memastikan Alpine.js berfungsi
document.addEventListener('DOMContentLoaded', function() {
    // Memastikan semua button dapat diklik
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.style.pointerEvents = 'auto';
        button.style.cursor = 'pointer';
    });
    
    // Memastikan dropdown menu berfungsi
    const dropdownButtons = document.querySelectorAll('[x-data]');
    dropdownButtons.forEach(button => {
        button.style.pointerEvents = 'auto';
    });
    
    console.log('Alpine.js dan button functionality telah diinisialisasi');
});

// Fungsi untuk toggle dropdown (fallback jika Alpine.js tidak berfungsi)
function toggleDropdown() {
    const dropdown = document.querySelector('[role="menu"]');
    if (dropdown) {
        dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
    }
}

// Fungsi untuk toggle mobile menu (fallback jika Alpine.js tidak berfungsi)
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenu) {
        mobileMenu.style.display = mobileMenu.style.display === 'none' ? 'block' : 'none';
    }
}