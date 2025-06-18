<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
<main id="primary" class="site-main">

	<!-- BG Wrapper -->
	<div class="page-hero-wrapper home-page-top-bg  bg-color--gradient">
		<!-- Home Hero - Section -->
		<?php echo get_template_part( 'template-parts/sections/home-hero' ) ?>

		<!-- Newsroom - Section -->
		<?php echo get_template_part( 'template-parts/sections/newsroom' ) ?>
	</div>

	<!-- Three Things - Section -->
	<?php echo get_template_part( 'template-parts/sections/three-things' ) ?>

	<!-- Case Studies - Section -->
	<?php echo get_template_part( 'template-parts/sections/case-studies' ) ?>

	<!-- Testimonials - Section -->
	<?php echo get_template_part( 'template-parts/sections/testimonials' ) ?>

	<!-- Events - Section -->
	<?php echo get_template_part( 'template-parts/sections/events' ) ?>

	<!-- Our Partners - Section -->
	<?php echo get_template_part( 'template-parts/sections/our-partners' ) ?>
	
	<!-- Blog - Section -->
	<?php echo get_template_part( 'template-parts/sections/blog' ) ?>

	<!-- FAQ - Section -->
	<?php echo get_template_part( 'template-parts/sections/faq' ) ?>

</main>
<?php
get_footer();
