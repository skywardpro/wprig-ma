const logosSlider = new Swiper('.logos-slider', {    
    slidesPerView: 'auto',
    spaceBetween: 24,    
    speed: 5000,
    loop: true,
    allowTouchMove: false,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 'auto',
        spaceBetween: 24,
      },
      1024: {
        slidesPerView: 'auto',
        spaceBetween: 32,
      },
      1215: {
        slidesPerView: 'auto',
        spaceBetween: 40,
      },
    },
  });
  
  export default logosSlider;
  