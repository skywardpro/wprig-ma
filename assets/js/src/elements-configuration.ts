/**
 * File elements-configuration.ts
 *
 * Contains calls, inits, and configurations for your third-party plugins.
 */
async function initElementsConfiguration() {
    /*
     * Init Working With PostSwiper 
     *
     * Where: PostSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.post-swiper')) {
        const postSwiper = await import('./elements-configuration/postSwiper');
    }
    
    /*
     * Init Working With PostSwiper 
     *
     * Where: PostSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.testimonials-swiper')) {
        const testimonialsSwiper = await import('./elements-configuration/testimonialsSwiper');
    }
}

// Run once after DOMContentLoaded event triggered.
document.addEventListener('DOMContentLoaded', function () {
    initElementsConfiguration();
});