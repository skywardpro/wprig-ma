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
		<?php get_template_part( 'template-parts/sections/services-page-hero' ) ?>

		<!-- The Services - Section -->
		<?php get_template_part( 'template-parts/sections/the-services' ) ?>

		<!-- Clients Case Studies - Section -->
		<?php get_template_part( 'template-parts/sections/clients-case-studies' ) ?>

		<!-- Contact Us - Section -->
		<?php echo get_template_part( 'template-parts/sections/contact-us' ) ?>

	</div>
</main>
<?php
get_footer();
