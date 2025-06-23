/**
 * File elements-configuration.ts
 *
 * Contains calls, inits, and configurations for your third-party plugins.
 */
async function initElementsConfiguration() {

    /*
     * Init mouse hover for full parent link
     *
     * Where: Entire website
     */
    if (document.querySelector('.link--full-parent')) {
        const linksOnParents = document.querySelectorAll('.link--full-parent'); // Take all switchers
        linksOnParents.forEach((link) => {

            link.addEventListener(
                'mouseenter',
                function (event) {
                    const target = event.target as HTMLElement;
                    (target.parentNode as HTMLElement)?.classList.add('link--hovered');
                },
                false
            );

            link.addEventListener(
                'mouseleave',
                function (event) {
                    const target = event.target as HTMLElement;
                    (target.parentNode as HTMLElement)?.classList.remove('link--hovered');
                },
                false
            );
        });
    }

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

    /*
     * Init Working With verticalLogosSlider 
     *
     * Where: verticalLogosSlider
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.vertical-logos-slider')) {
        const verticalLogosSlider = await import('./elements-configuration/verticalLogosSlider');
    }


    /*
     * Init Working With TheServicesSwiper 
     *
     * Where: TheServicesSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.the-services-swiper')) {
        const theServicesSwiper = await import('./elements-configuration/theServicesSwiper');
        import('./elements-configuration/theServicesSwiperSlide')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load theServicesSwiperSlide module:", error));

    }

    /*
     * Init Working With ClientsCaseStudiesSwiper 
     *
     * Where: ClientsCaseStudiesSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.clients-case-studies-swiper')) {
        const clientsCaseStudiesSwiper = await import('./elements-configuration/clientsCaseStudiesSwiper');
    }

    /*
     * Init Working With TopArticlesSwiper 
     *
     * Where: TopArticlesSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.top-articles-swiper')) {
        const topArticlesSwiper = await import('./elements-configuration/topArticlesSwiper');
    }

    /*
     * Init Working With RedditTractionSwiper 
     *
     * Where: RedditTractionSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.reddit-traction-swiper')) {
        const redditTractionSwiper = await import('./elements-configuration/redditTractionSwiper');
    }

    /*
     * Init Working With InfluencerMarketingSwiper 
     *
     * Where: InfluencerMarketingSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.influencer-marketing-swiper')) {
        const influencerMarketingSwiper = await import('./elements-configuration/influencerMarketingSwiper');
    }


    /*
     * Init Working With MoreCaseStudiesSwiper 
     *
     * Where: MoreCaseStudiesSwiper
     * Handled by:
     * WP_Rig_Toolkit/Swiper
     */
    if (document.querySelector('.influencer-marketing-swiper')) {
        const moreCaseStudiesSwiper = await import('./elements-configuration/moreCaseStudiesSwiper');
    }

    /*
     * Init Header
     *
     */
    if (document.querySelector('.site-header')) {
        import('./elements-configuration/header')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load header module:", error));
    }

    /*
     * Init Dropdown Form 
     *
     */
    if (document.querySelector('#dropdown-form')) {
        import('./elements-configuration/dropdownForm')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load dropdownBlock module:", error));
    }

    /*
     * Init FAQ Items 
     *
     */
    if (document.querySelector('.faq-item')) {
        import('./elements-configuration/faqItems')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load faqItems module:", error));
    }

    /*
     * Init Our Partners Cards
     *
     */
    if (document.querySelector('.our-partners-cards')) {
        import('./elements-configuration/ourPartnersCards')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load ourPartnersCards module:", error));
    }

    /*
     * Init Our Partners Cards
     *
     */
    if (document.querySelector('#copy-address-to-clipboard-btn')) {
        import('./elements-configuration/copyAddressToClipboardBtn')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load copyAddressToClipboardBtn module:", error));
    }
    
    /*
     * Init Who We Are Gallery Swiper
     *
     */
    if (document.querySelector('.who-we-are-gallery-swiper')) {
        import('./elements-configuration/whoWeAreGallerySwiper')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load whoWeAreGallerySwiper module:", error));
    }
    
    /*
     * Init The Team Row Cards Swiper
     *
     */
    if (document.querySelector('#the-team')) {
        import('./elements-configuration/theTeamRowCardsSwiper')
            .then(module => {
                module.init();
            })
            .catch(error => console.error("Failed to load theTeamRowCardsSwiper module:", error));
    }
}

// Run once after DOMContentLoaded event triggered.
document.addEventListener('DOMContentLoaded', function () {
    initElementsConfiguration();
});