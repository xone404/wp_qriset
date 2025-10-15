// Fungsionalitas Menu Hamburger
const hamburgerToggle = document.getElementById('hamburger-toggle');
const mainNav = document.getElementById('main-nav');
if (hamburgerToggle && mainNav) {
    hamburgerToggle.addEventListener('click', function() {
        mainNav.classList.toggle('menu-open');
    });
} else {
    console.error('Tombol hamburger atau navigasi utama tidak ditemukan.');
}

// Fungsionalitas FAQ Accordion (Tutup Otomatis)
document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('toggle', event => {
        if (item.open) {
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.open = false;
                }
            });
        }
    });
});

// === Toggle Search di Header ===
document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.querySelector('.search-toggle');
    const searchForm = document.querySelector('.search-form');

    if (toggleBtn && searchForm) {
        toggleBtn.addEventListener('click', () => {
            searchForm.classList.toggle('active');
        });
    }
});
