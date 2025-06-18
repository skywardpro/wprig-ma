<?php
/**
 * WP_Rig\WP_Rig\Elements\WP_Rig_Toolkit\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\WP_Rig_Toolkit\Splittype;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use function add_action;
use function add_filter;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function wp_localize_script;

/**
 * Class for managing Sticky.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'splittype';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', array( $this, 'action_enqueue_sticky_files' ) );
	}

	/**
	 * Enqueues script.
	 */
	public function action_enqueue_sticky_files() {
		// Enqueue the sticky script.
		wp_enqueue_script(
			'splittype',
			get_theme_file_uri( '/assets/js/vendor/splittype/splittype.min.js' ),
			array(),
			wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/vendor/splittype/splittype.min.js' ) ),
			false
		);

		wp_script_add_data( 'splittype', 'defer', true );
		wp_script_add_data( 'splittype', 'precache', true );
	}
}
