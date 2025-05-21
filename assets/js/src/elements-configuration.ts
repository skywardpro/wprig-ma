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
    
    /*
     * Init Working With CaseStudiesSwiper 
     *
     * Where: CaseStudiesSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.case-studies-swiper')) {
        const caseStudiesSwiper = await import('./elements-configuration/caseStudiesSwiper');
    }
    
    /*
     * Init Working With NewsroomSwiper 
     *
     * Where: NewsroomSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.newsroom-swiper')) {
        const newsroomSwiper = await import('./elements-configuration/newsroomSwiper');
    }

    /*
     * Init Working With logosSlider 
     *
     * Where: logosSlider
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.logos-slider')) {
        const logosSlider = await import('./elements-configuration/logosSlider');
    }
}

// Run once after DOMContentLoaded event triggered.
document.addEventListener('DOMContentLoaded', function () {
    initElementsConfiguration();
});