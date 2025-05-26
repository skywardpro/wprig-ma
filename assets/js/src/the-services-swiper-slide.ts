/**
 * Handles The Services Swiper Slide toggle behavior:
 * - Show/hide Slide overlay.
 */
document.addEventListener("DOMContentLoaded", function () {

    const swiper = document.querySelector('.the-services-swiper');
    const slides = swiper?.querySelectorAll('.the-services-swiper__slide');
    
    // Add open/close buttons handlers for each slide
    slides?.forEach(setupOpenCloseButtons);
    
    function setupOpenCloseButtons(slide) {
        slide.querySelector('.the-services-swiper__slide-open')?.addEventListener('click', showOverlay)
        slide.querySelector('.the-services-swiper__slide-close')?.addEventListener('click', hideOverlay)

        function showOverlay() {
            slide.classList.add('active');
        }
        
        function hideOverlay() {
            slide.classList.remove('active');
        }
    }
});