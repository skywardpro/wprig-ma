let caseStudiesSwiper = null;

function initSwiper() {
  if (window.innerWidth < 1024) {
    caseStudiesSwiper = new Swiper('.case-studies-swiper', {
      pagination: {
        el: '.case-studies-swiper__pagination',
        clickable: true
      },
      slidesPerView: 'auto',
      spaceBetween: 16,
      speed: 1500,
      loop: false,
      allowTouchMove: true
    });
  }
}

function handleResize() {
  if (window.innerWidth >= 1024 && caseStudiesSwiper) {
    caseStudiesSwiper.destroy(true, true);
    caseStudiesSwiper = null;
  } else if (window.innerWidth < 1024 && !caseStudiesSwiper) {
    initSwiper();
  }
}

// Initialize
initSwiper();

// Add resize listener with debounce
let resizeTimeout;
window.addEventListener('resize', () => {
  clearTimeout(resizeTimeout);
  resizeTimeout = setTimeout(handleResize, 250);
});

export default caseStudiesSwiper;