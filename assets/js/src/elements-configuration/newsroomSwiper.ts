const newsroomSwiper = new Swiper('.newsroom-swiper', {
    pagination: {
        el: '.newsroom-swiper__pagination',
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
        // Disable dynamic resizing by removing breakpoints
    },
});
export default newsroomSwiper;
