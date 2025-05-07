const postSwiper = new Swiper('.post-swiper', {
    pagination: {
        el: '.post-swiper__pagination',
        clickable: true
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
export default postSwiper;
