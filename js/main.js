// Nav scroll behavior
const nav = document.getElementById('site-nav');
if (nav) {
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });
}

// Mobile menu
const hamburger = document.getElementById('nav-hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const mobileClose = document.getElementById('mobile-close');

if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => mobileMenu.classList.add('open'));
    mobileClose?.addEventListener('click', () => mobileMenu.classList.remove('open'));
    mobileMenu.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => mobileMenu.classList.remove('open'));
    });
}

// Scroll reveal
const revealEls = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => io.observe(el));
} else {
    revealEls.forEach(el => el.classList.add('visible'));
}

// Pricing accordion
document.querySelectorAll('.pricing-category-header').forEach(header => {
    header.addEventListener('click', () => {
        const cat = header.closest('.pricing-category');
        cat.classList.toggle('open');
    });
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        const id = a.getAttribute('href').slice(1);
        const target = document.getElementById(id);
        if (target) {
            e.preventDefault();
            const offset = 80;
            window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
        }
    });
});

// Rotating whitening headlines
const headlines = [
    'Pamatujete si, kdy jste se naposledy usmáli naplno?',
    'Co by změnil zářivější úsměv ve vašem životě?',
    'Váš úsměv je první, co si lidé všimnou — víte o tom?',
    'Jak dlouho už odkládáte bělení zubů?',
];
const headlineEl = document.getElementById('whitening-headline');
if (headlineEl) {
    let i = 0;
    setInterval(() => {
        i = (i + 1) % headlines.length;
        headlineEl.style.opacity = '0';
        setTimeout(() => {
            headlineEl.textContent = headlines[i];
            headlineEl.style.opacity = '1';
        }, 400);
    }, 4000);
    headlineEl.style.transition = 'opacity .4s ease';
}
