// import './bootstrap';
import './background-effects';

document.addEventListener('DOMContentLoaded', () => {
    // ==========================================
    // 1. NAVBAR & ACTIVE LINK OBSERVER
    // ==========================================
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle Mobile Menu
    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Active Link State with Box (Pill) Styling
    const observerOptions = {
        root: null,
        rootMargin: '-20% 0px -70% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const activeId = entry.target.getAttribute('id');
                
                navLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    
                    if (href === `#${activeId}`) {
                        // Gaya saat Aktif (Kotak Nyala Biru Transparan)
                        link.classList.add('bg-blue-500/10', 'text-blue-400', 'font-bold', 'ring-1', 'ring-inset', 'ring-blue-500/50');
                        link.classList.remove('text-slate-400', 'hover:bg-slate-800/60');
                    } else {
                        // Gaya saat Tidak Aktif (Biasa)
                        link.classList.remove('bg-blue-500/10', 'text-blue-400', 'font-bold', 'ring-1', 'ring-inset', 'ring-blue-500/50');
                        link.classList.add('text-slate-400', 'hover:bg-slate-800/60');
                    }
                });
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section));

    // ==========================================
    // 2. FORMSPREE AJAX + POP-UP NOTIFICATION & AUTO RESET
    // ==========================================
    const contactForm = document.getElementById('contact-form');
    const submitBtn = document.getElementById('contact-submit-btn');
    const btnText = document.getElementById('contact-btn-text');

    // AUTO-RESET: Kosongkan isi form setiap kali halaman di-load / di-refresh
    if (contactForm) {
        contactForm.reset();

        contactForm.addEventListener('submit', async (event) => {
            event.preventDefault(); // Menahan reload/redirect

            // Indikator Loading pada Tombol
            submitBtn.disabled = true;
            btnText.innerText = 'Mengirim...';

            const formData = new FormData(contactForm);

            try {
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (response.ok) {
                    // Munculkan Pop-up Sukses
                    window.showContactModal(
                        'success', 
                        'Pesan Terkirim!', 
                        'Terima kasih telah menghubungi saya. Pesan Anda telah berhasil disampaikan.'
                    );
                    contactForm.reset(); // Kosongkan isi input setelah dikirim
                } else {
                    // Munculkan Pop-up Gagal
                    window.showContactModal(
                        'error', 
                        'Gagal Mengirim', 
                        'Maaf, terjadi kesalahan saat mengirim pesan. Silakan coba beberapa saat lagi.'
                    );
                }
            } catch (error) {
                window.showContactModal(
                    'error', 
                    'Koneksi Terganggu', 
                    'Gagal terhubung ke server. Periksa koneksi internet Anda lalu coba lagi.'
                );
            } finally {
                // Kembalikan tombol ke keadaan semula
                submitBtn.disabled = false;
                btnText.innerText = 'Kirim Pesan';
            }
        });
    }
});

// ==========================================
// 3. PROJECT MODAL & CAROUSEL SYSTEM
// ==========================================
let currentImages = [];
let currentImageIndex = 0;

// Fungsi Buka Modal Detail Project
window.openProjectModal = function(id) {
    const template = document.getElementById(`template-${id}`);
    if (!template) return;

    const data = template.content.querySelector('.project-modal-data');
    
    // Set Title & Description
    document.getElementById('modal-title').innerText = data.dataset.title;
    document.getElementById('modal-description').innerText = data.dataset.description;

    // Set Technologies
    const techContainer = document.getElementById('modal-technologies');
    techContainer.innerHTML = '';
    const techs = JSON.parse(data.dataset.technologies || '[]');
    techs.forEach(tech => {
        const span = document.createElement('span');
        span.className = 'rounded-lg bg-blue-500/10 border border-blue-500/30 px-3 py-1 text-xs font-medium text-blue-400';
        span.innerText = tech;
        techContainer.appendChild(span);
    });

    // Set GitHub Link
    const githubBtn = document.getElementById('modal-github');
    if (data.dataset.github && data.dataset.github !== 'null') {
        githubBtn.href = data.dataset.github;
        githubBtn.classList.remove('hidden');
    } else {
        githubBtn.classList.add('hidden');
    }

    // Set Demo Link
    const demoBtn = document.getElementById('modal-demo');
    if (demoBtn) {
        if (data.dataset.demo && data.dataset.demo !== 'null') {
            demoBtn.href = data.dataset.demo;
            demoBtn.classList.remove('hidden');
        } else {
            demoBtn.classList.add('hidden');
        }
    }

    // Set Carousel Images
    currentImages = JSON.parse(data.dataset.images || '[]');
    currentImageIndex = 0;
    updateCarousel();

    // Show Modal
    const modal = document.getElementById('project-modal');
    modal.classList.remove('opacity-0', 'pointer-events-none');
};

// Fungsi Tutup Modal Project
window.closeProjectModal = function() {
    const modal = document.getElementById('project-modal');
    modal.classList.add('opacity-0', 'pointer-events-none');
};

// Fungsi Update Gambar & Controls Carousel
function updateCarousel() {
    const imgEl = document.getElementById('modal-carousel-img');
    const prevBtn = document.getElementById('modal-prev-btn');
    const nextBtn = document.getElementById('modal-next-btn');
    const dotsContainer = document.getElementById('modal-carousel-dots');

    if (currentImages.length > 0) {
        imgEl.src = `/images/${currentImages[currentImageIndex]}`;
    }

    if (currentImages.length <= 1) {
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
        dotsContainer.innerHTML = '';
        return;
    }

    prevBtn.style.display = 'flex';
    nextBtn.style.display = 'flex';

    dotsContainer.innerHTML = '';
    currentImages.forEach((_, idx) => {
        const dot = document.createElement('div');
        dot.className = `h-2 rounded-full transition-all ${idx === currentImageIndex ? 'bg-blue-500 w-5' : 'bg-slate-600 w-2'}`;
        dotsContainer.appendChild(dot);
    });
}

// Next Image
window.nextCarouselImage = function() {
    currentImageIndex = (currentImageIndex + 1) % currentImages.length;
    updateCarousel();
};

// Prev Image
window.prevCarouselImage = function() {
    currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
    updateCarousel();
};

// ==========================================
// 4. CONTACT MODAL SYSTEM (GLOBAL FUNCTIONS)
// ==========================================
window.showContactModal = function(type, title, message) {
    const modal = document.getElementById('contact-modal');
    const iconContainer = document.getElementById('contact-modal-icon');
    const titleEl = document.getElementById('contact-modal-title');
    const messageEl = document.getElementById('contact-modal-message');

    if (!modal) return;

    titleEl.innerText = title;
    messageEl.innerText = message;

    if (type === 'success') {
        iconContainer.className = 'mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400';
        iconContainer.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>`;
    } else {
        iconContainer.className = 'mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-rose-500/10 border border-rose-500/30 text-rose-400';
        iconContainer.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>`;
    }

    // Tampilkan Modal
    modal.classList.remove('opacity-0', 'pointer-events-none');
};

// ==========================================
// PRELOADER SCREEN HANDLER
// ==========================================
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        // Efek Fade Out
        preloader.classList.add('opacity-0', 'pointer-events-none');
        
        // Hapus elemen preloader dari DOM setelah animasi transisi selesai
        setTimeout(() => {
            preloader.remove();
        }, 700);
    }
});

window.closeContactModal = function() {
    const modal = document.getElementById('contact-modal');
    if (modal) {
        modal.classList.add('opacity-0', 'pointer-events-none');
    }
};