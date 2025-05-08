const testimonialsSwiper = new Swiper('.testimonials-swiper', {
    pagination: {
        el: '.testimonials-swiper__pagination',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },    
    spaceBetween: 16,
    slidesPerView: 1.3,
    speed: 1500,
    loop: false,
    allowTouchMove: true,
    breakpoints: {
        768: {    
            slidesPerView: 2.5,        
            spaceBetween: 24,
        },
        1023: {    
            slidesPerView: 3,        
            spaceBetween: 24,
        },

    },
});
export default testimonialsSwiper;
