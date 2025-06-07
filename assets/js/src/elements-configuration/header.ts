/**
 * Handles Heaader toggle on scroll behavior:
 */
export function init(): void {

    let lastKnownScrollPosition = 0;
    let ticking = false;
    
    function handleHeaderOnScroll(scrollYOffset) {
        
        const header = document.querySelector<HTMLElement>('.site-header');
        if(! header) {
            return;
        }

        const ctaButton = header.querySelector('.header-cta-button');
        const headerHeight = header.offsetHeight;
        if(scrollYOffset > headerHeight) {
            header.classList.add('active');
            ctaButton?.classList.remove('btn--secondary');
            ctaButton?.classList.add('btn--primary');
        } else {
            header.classList.remove('active');
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
}