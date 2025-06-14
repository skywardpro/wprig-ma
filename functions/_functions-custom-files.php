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
 * Enqueue Events script
 *
 * Add the script file with all configurations for you events.js plugins and other scripts.
 * https://docs.wprig.org/assets-optimization/elements-configuration
 */
function enqueue_events_js() {
	wp_enqueue_script(
		'events',
		get_theme_file_uri( '/assets/js/events.min.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_script_add_data( 'events', 'defer', true );
	wp_script_add_data( 'events', 'precache', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_events_js', 999 );
