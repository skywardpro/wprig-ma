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

</main>
<?php
get_footer();
