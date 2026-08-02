const navbar = document.querySelector('[data-navbar]');
const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.nav-menu');
const navLinks = [...document.querySelectorAll('.nav-menu a')];

const setMenuState = (isOpen) => {
    if (!menuToggle || !navMenu) return;

    navMenu.classList.toggle('is-open', isOpen);
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    menuToggle.setAttribute('aria-label', isOpen ? 'بستن منو' : 'باز کردن منو');
    menuToggle.querySelector('i')?.classList.toggle('fa-bars', !isOpen);
    menuToggle.querySelector('i')?.classList.toggle('fa-xmark', isOpen);
    document.body.classList.toggle('menu-open', isOpen);
};

menuToggle?.addEventListener('click', () => {
    setMenuState(menuToggle.getAttribute('aria-expanded') !== 'true');
});

navLinks.forEach((link) => link.addEventListener('click', () => setMenuState(false)));

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') setMenuState(false);
});

window.addEventListener('resize', () => {
    if (window.innerWidth > 760) setMenuState(false);
});

const updateNavbar = () => navbar?.classList.toggle('is-scrolled', window.scrollY > 12);
updateNavbar();
window.addEventListener('scroll', updateNavbar, { passive: true });

const sections = [...document.querySelectorAll('main section[id]')];

if ('IntersectionObserver' in window) {
    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            navLinks.forEach((link) => {
                link.classList.toggle('active', link.getAttribute('href') === `#${entry.target.id}`);
            });
        });
    }, { rootMargin: '-35% 0px -55% 0px', threshold: 0 });

    sections.forEach((section) => sectionObserver.observe(section));
}
