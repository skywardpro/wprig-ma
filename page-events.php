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

	<div id="events-page" class="">

		<!-- Contact Us - Section -->
		<?php echo get_template_part( 'template-parts/sections/contact-us' ) ?>

	</div>
</main>
<?php
get_footer();
