const moreCaseStudiesSwiper = new Swiper('.more-case-studies-swiper', {
    pagination: {
        el: '.more-case-studies-swiper__pagination',
        clickable: true
    },
    slidesPerView: 'auto',
    spaceBetween: 16,
    speed: 1500,
    loop: false,
    allowTouchMove: true,
    breakpoints: {
        769: {
            spaceBetween: 32,
        },
        1024: {
            spaceBetween: 32,
        }
    },
});
export default moreCaseStudiesSwiper;
