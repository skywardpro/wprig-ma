<?php
/**
 * The Events page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-main">

	<!-- EVENTS DEMO -->
	<?php echo get_template_part( 'template-parts/sections/events-demo' ) ?>
</main>
<?php
get_footer();
