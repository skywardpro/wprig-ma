export function init(): void {
    const swiper = new Swiper('.who-we-are-gallery-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 16,
        speed: 12000,
        loop: true,
        allowTouchMove: false,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            769: {
                spaceBetween: 24
            }
        },
    });
}