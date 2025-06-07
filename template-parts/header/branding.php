<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<a href="<?php echo get_site_url()?>" class="custom-logo-link" rel="home" aria-current="page">
		<img width="56" height="32" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-white-with-text.svg" class="custom-logo no-lazy" alt="Market Across">
		<img width="56" height="32" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-dark-with-text.svg" class="custom-logo dark no-lazy" alt="Market Across">
	</a>
</div><!-- .site-branding -->

