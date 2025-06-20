<?php
/**
 * Render your site Events page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-main">

	<!-- EVENTS DEMO -->
	<?php echo get_template_part( 'template-parts/sections/events-demo' ) ?>

</main>
<?php
get_footer();
