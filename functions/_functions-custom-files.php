<?php
/**
 * Enqueue Custom Files
 *
 * Use this file to add functions for adding custom files in WordPress.
 *
 * For more information, visit: https://docs.wprig.org/wp-rig-toolkit-structure/functions.php
 *
 * @package wp_rig
 */

/**
 * Enqueue Global.js script
 *
 * Add the script file with global scripts.
 */
function enqueue_global_js() {
	wp_enqueue_script(
		'global-scripts',
		get_theme_file_uri( '/assets/js/global.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		false
	);
	wp_script_add_data( 'global-scripts', 'defer', true );
	wp_script_add_data( 'global-scripts', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_global_js', 999 );

/**
 * Enqueue Elements Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_elements_configuration_js() {
	wp_enqueue_script(
		'elements-configuration',
		get_theme_file_uri( '/assets/js/elements-configuration.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'elements-configuration', 'defer', true );
	wp_script_add_data( 'elements-configuration', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_elements_configuration_js', 999 );

/**
 * Enqueue Elements Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_faq_item_js() {
	wp_enqueue_script(
		'faq-item',
		get_theme_file_uri( '/assets/js/faq-item.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'faq-item', 'defer', true );
	wp_script_add_data( 'faq-item', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_faq_item_js', 999 );


/**
 * Enqueue Elements Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_our_partners_cards_js() {
	wp_enqueue_script(
		'our-partners-cards',
		get_theme_file_uri( '/assets/js/our-partners-cards.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'our-partners-cards', 'defer', true );
	wp_script_add_data( 'our-partners-cards', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_our_partners_cards_js', 999 );

/**
 * Enqueue Forms Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_forms_configuration_js() {
	wp_enqueue_script(
		'forms',
		get_theme_file_uri( '/assets/js/forms.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'forms', 'defer', true );
	wp_script_add_data( 'forms', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_forms_configuration_js', 999 );


/**
 * Enqueue Dropdown Block Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_dropdown_block_js() {
	wp_enqueue_script(
		'dropdown-block',
		get_theme_file_uri( '/assets/js/dropdown-block.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'dropdown-block', 'defer', true );
	wp_script_add_data( 'dropdown-block', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dropdown_block_js', 999 );


/**
 * Enqueue The Services Swiper Slides Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_the_services_swiper_slide_js() {
	wp_enqueue_script(
		'the-services-swiper-slide',
		get_theme_file_uri( '/assets/js/the-services-swiper-slide.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'the-services-swiper-slide', 'defer', true );
	wp_script_add_data( 'the-services-swiper-slide', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_the_services_swiper_slide_js', 999 );

/**
 * Enqueue The Header Toggle On Scroll Configuration script
 *
 * Add the script file with all configurations for you .js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_header_toggle_on_scroll_js() {
	wp_enqueue_script(
		'header',
		get_theme_file_uri( '/assets/js/header.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'header', 'defer', true );
	wp_script_add_data( 'header', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_header_toggle_on_scroll_js', 999 );
