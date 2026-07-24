const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.main-nav');

if (toggle && nav) {
    toggle.addEventListener('click', () => {
        const isOpen = nav.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(isOpen));
        toggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
    });

    nav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            nav.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Ouvrir le menu');
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && nav.classList.contains('open')) {
            nav.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Ouvrir le menu');
            toggle.focus();
        }
    });
}


const contactForm = document.querySelector('#contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', (event) => {
        const requiredFields = contactForm.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach((field) => {
            const wrapper = field.closest('label');
            const value = field.value.trim();
            const fieldIsEmail = field.type === 'email';
            const emailIsValid = !fieldIsEmail || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
            const fieldIsValid = value.length > 0 && emailIsValid;

            if (wrapper) {
                wrapper.classList.toggle('has-error', !fieldIsValid);
            }

            if (!fieldIsValid) {
                isValid = false;
            }
        });

        if (!isValid) {
            event.preventDefault();
            const note = contactForm.querySelector('#formNote');
            if (note) {
                note.textContent = 'Merci de corriger les champs indiqués avant l’envoi.';
                note.classList.remove('success');
                note.classList.add('error');
            }
        }
    });
}
