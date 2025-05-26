const clientsCaseStudiesSwiper = new Swiper('.clients-case-studies-swiper', {
  pagination: {
    el: '.clients-case-studies-swiper__pagination',
    clickable: true
  },
  slidesPerView: 'auto',
  spaceBetween: 16,
  speed: 1500,
  loop: false,
  allowTouchMove: true,
  breakpoints: {
    769: {
      spaceBetween: 32
    }
  }
});




export default clientsCaseStudiesSwiper;