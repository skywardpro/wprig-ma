const theServicesSwiper = new Swiper('.the-services-swiper', {
    pagination: {
        el: '.the-services-swiper__pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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
        1216: {
            spaceBetween: 24,
            slidesPerView: 3
        },
        1408: {
            spaceBetween: 32,
            slidesPerView: 3
        }
    },
});

export default theServicesSwiper;
