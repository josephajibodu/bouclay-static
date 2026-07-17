document.addEventListener('DOMContentLoaded', () => {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!reduceMotion) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                });
            },
            {
                threshold: 0.16,
                rootMargin: '0px 0px -8% 0px',
            },
        );

        document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
    } else {
        document.querySelectorAll('.reveal').forEach((el) => el.classList.add('is-visible'));
    }

    const deck = document.getElementById('pitch-deck');

    if (!deck) {
        return;
    }

    const slides = Array.from(deck.querySelectorAll('section[id]'));
    const dots = Array.from(document.querySelectorAll('[data-slide-dot]'));

    const setActiveSlide = (id) => {
        dots.forEach((dot) => {
            if (dot.dataset.slideDot === id) {
                dot.querySelector('span:last-child')?.setAttribute('data-active', '');
            } else {
                dot.querySelector('span:last-child')?.removeAttribute('data-active');
            }
        });
    };

    const slideObserver = new IntersectionObserver(
        (entries) => {
            const visible = entries
                .filter((entry) => entry.isIntersecting)
                .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

            if (visible?.target?.id) {
                setActiveSlide(visible.target.id);
            }
        },
        {
            root: deck,
            threshold: [0.45, 0.6, 0.75],
        },
    );

    slides.forEach((slide) => slideObserver.observe(slide));

    if (slides[0]) {
        setActiveSlide(slides[0].id);
    }

    const goToSlide = (index) => {
        const slide = slides[index];

        if (!slide) {
            return;
        }

        slide.scrollIntoView({
            behavior: reduceMotion ? 'auto' : 'smooth',
            block: 'start',
        });
    };

    const currentIndex = () => {
        const deckTop = deck.scrollTop;
        let closest = 0;
        let closestDistance = Number.POSITIVE_INFINITY;

        slides.forEach((slide, index) => {
            const distance = Math.abs(slide.offsetTop - deckTop);

            if (distance < closestDistance) {
                closest = index;
                closestDistance = distance;
            }
        });

        return closest;
    };

    window.addEventListener('keydown', (event) => {
        if (event.target instanceof HTMLElement && ['INPUT', 'TEXTAREA', 'SELECT'].includes(event.target.tagName)) {
            return;
        }

        if (['ArrowDown', 'PageDown', 'ArrowRight', ' '].includes(event.key)) {
            event.preventDefault();
            goToSlide(Math.min(currentIndex() + 1, slides.length - 1));
        }

        if (['ArrowUp', 'PageUp', 'ArrowLeft'].includes(event.key)) {
            event.preventDefault();
            goToSlide(Math.max(currentIndex() - 1, 0));
        }

        if (event.key === 'Home') {
            event.preventDefault();
            goToSlide(0);
        }

        if (event.key === 'End') {
            event.preventDefault();
            goToSlide(slides.length - 1);
        }
    });
});
