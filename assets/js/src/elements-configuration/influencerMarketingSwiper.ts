const influencerMarketingSwiper = new Swiper('.influencer-marketing-swiper', {
    pagination: {
        el: '.influencer-marketing-swiper__pagination',
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
export default influencerMarketingSwiper;
