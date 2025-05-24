<?php
/**
 * The Services page template file
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

	<div id="services-page" class="">

		<!-- Hero - Section -->
		<?php get_template_part('template-parts/sections/services-page-hero') ?>
	</div>
</main>
<?php
get_footer();
