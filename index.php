<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
