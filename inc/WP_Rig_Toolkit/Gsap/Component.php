<?php
/**
 * WP_Rig\WP_Rig\WP_Rig_Toolkit\gsap\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\WP_Rig_Toolkit\Gsap;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use WP_Post;
use function add_action;
use function add_filter;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function wp_localize_script;

/**
 * Class for managing comments UI.
 *
 * Exposes template tags:
 *
 * @link https://wordpress.org/plugins/amp/
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'gsap';
	}


	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', array( $this, 'action_activate_gsap' ), 200 );
	}


	/**
	 * Enqueues scripts and styles.
	 */
	public function action_activate_gsap() {
		// Enqueue scripts.
		wp_enqueue_script(
			'gsap',
			get_theme_file_uri( '/assets/js/vendor/gsap/gsap.min.js' ),
			array(),
			wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/vendor/gsap/gsap.min.js' ) ),
			false
		);

		wp_script_add_data( 'gsap', 'defer', true );
		wp_script_add_data( 'gsap', 'precache', true );

		// Enqueue scripts.
		wp_enqueue_script(
			'gsap-scrolltrigger',
			get_theme_file_uri( '/assets/js/vendor/gsap/ScrollTrigger.min.js' ),
			array('gsap'),
			wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/vendor/gsap/ScrollTrigger.min.js' ) ),
			false
		);

		wp_script_add_data( 'gsap-scrolltrigger', 'defer', true );
		wp_script_add_data( 'gsap-scrolltrigger', 'precache', true );

		// Enqueue scripts.
		wp_enqueue_script(
			'gsap-scrollto',
			get_theme_file_uri( '/assets/js/vendor/gsap/ScrollToPlugin.min.js' ),
			array('gsap'),
			wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/vendor/gsap/ScrollToPlugin.min.js' ) ),
			false
		);

		wp_script_add_data( 'gsap-scrollto', 'defer', true );
		wp_script_add_data( 'gsap-scrollto', 'precache', true );

		// Enqueue scripts.
		wp_enqueue_script(
			'gsap-smoothscroll',
			get_theme_file_uri( '/assets/js/vendor/gsap/ScrollSmoother.min.js' ),
			array('gsap'),
			wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/vendor/gsap/ScrollSmoother.min.js' ) ),
			false
		);

		wp_script_add_data( 'gsap-smoothscroll', 'defer', true );
		wp_script_add_data( 'gsap-smoothscroll', 'precache', true );
	}
}
