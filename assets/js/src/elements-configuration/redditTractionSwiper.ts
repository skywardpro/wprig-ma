const redditTractionSwiper = new Swiper('.reddit-traction-swiper', {
    pagination: {
        el: '.reddit-traction-swiper__pagination',
        clickable: true
    },
    slidesPerView: 'auto',
    spaceBetween: 16,
    speed: 1500,
    loop: false,
    allowTouchMove: true,
    breakpoints: {
        769: {
            spaceBetween: 24,
        },
        1024: {
            spaceBetween: 32,
        }
    },
});
export default redditTractionSwiper;
