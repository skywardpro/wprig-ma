const verticalLogosSlider = new Swiper('.vertical-logos-slider', {
  slidesPerView: 'auto',
  spaceBetween: 24,
  speed: 3000,
  loop: true,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  breakpoints: {
    768: {
      direction: 'vertical',
      loop: true,
      slidesPerView: 'auto',
      spaceBetween: 24,
    },
    1024: {
      direction: 'vertical',
      loop: true,
      slidesPerView: 'auto',
      spaceBetween: 32,
    },
    1215: {
      direction: 'vertical',
      loop: true,
      slidesPerView: 'auto',
      spaceBetween: 40,
    },
  },
});

export default verticalLogosSlider;
