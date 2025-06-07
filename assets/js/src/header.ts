/**
 * Handles Heaader toggle on scroll behavior:
 */
document.addEventListener("DOMContentLoaded", function () {

    const header = document.querySelector('.site-header');
    const ctaButton = header?.querySelector('.header-cta-button');
    let lastKnownScrollPosition = 0;
    let ticking = false;

    function handleHeaderOnScroll(scrollYOffset) {
        const headerHeight = header?.offsetHeight;
        if(scrollYOffset > headerHeight) {
            header?.classList.add('active');
            ctaButton?.classList.remove('btn--secondary');
            ctaButton?.classList.add('btn--primary');
        } else {
            header?.classList.remove('active');
            ctaButton?.classList.remove('btn--primary');
            ctaButton?.classList.add('btn--secondary');
        }
        
    }

    document.addEventListener("scroll", (event) => {
        lastKnownScrollPosition = window.scrollY;

        if (!ticking) {
            window.requestAnimationFrame(() => {
                handleHeaderOnScroll(lastKnownScrollPosition);
                ticking = false;
            });

            ticking = true;
        }
    });
});