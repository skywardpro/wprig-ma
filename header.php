<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

		<!-- Header -->
		<header id="masthead" class="site-header is-fixed w-100">
			<div class="container is-flex align-items--center is-relative">
				<!-- Logo -->
				<?php get_template_part( 'template-parts/header/branding' ); ?>

				<!-- Primary menu -->
				<?php get_template_part( 'template-parts/header/navigation' ); ?>

				<!-- Desktop CTA button -->
				<div class="header-cta-wrapper">
					<a class="header-cta-button btn--secondary is-uppercase">
						Contact Us
					</a>
				</div>
			</div>
		</header><!-- #masthead -->