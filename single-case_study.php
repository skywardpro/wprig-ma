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
	<?php get_template_part('template-parts/sections/case-page/case-page-hero') ?>
	
	<!-- Top Articles -->
	<?php get_template_part('template-parts/sections/case-page/top-articles') ?>
	
	<!-- Case Points -->
	<?php get_template_part('template-parts/sections/case-page/case-points') ?>
	
	<!-- Reddit Tration -->
	<?php get_template_part('template-parts/sections/case-page/reddit-traction') ?>
	
	<!-- Influencer Marketing -->
	<?php get_template_part('template-parts/sections/case-page/influencer-marketing') ?>
	
	<!-- Selected Testimonial -->
	<?php get_template_part('template-parts/sections/case-page/selected-testimonial') ?>
	
	<!-- Share This Case -->
	<?php get_template_part('template-parts/sections/case-page/share-this-case') ?>
	
	<!-- More Case Studies -->
	<?php get_template_part('template-parts/sections/case-page/more-case-studies') ?>

</main>
<?php
get_footer();
