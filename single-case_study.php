<?php
/**
 * The template file for single Case Studies post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="case-page" class="site-main bg-color--light-purple">

	<!-- Hero -->
	<?php get_template_part('template-parts/sections/case-page-hero') ?>
	
	<!-- Top Articles -->
	<?php get_template_part('template-parts/sections/top-articles') ?>
	
	<!-- Case Details -->
	<?php get_template_part('template-parts/sections/case-details') ?>
	
	<!-- Reddit Tration -->
	<?php get_template_part('template-parts/sections/reddit-traction') ?>
	
	<!-- Influencer Marketing -->
	<?php get_template_part('template-parts/sections/influencer-marketing') ?>
	
	<!-- Selected Testimonial -->
	<?php get_template_part('template-parts/sections/selected-testimonial') ?>
	
	<!-- Share This Case -->
	<?php get_template_part('template-parts/sections/share-this-case') ?>

</main>
<?php
get_footer();
