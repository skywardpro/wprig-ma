<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!-- MediaCard -->
<div class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
	<!-- MediaLogo -->
	<img width="160" height="40" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/case-studies/media-logo-<?php echo get_sub_field( 'media_name' ) ?>.png" alt="<?php echo get_sub_field( 'media_name' ); ?>" class="case-studies-page-item-v4__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
	<!-- Screenshot -->
	<img width="230" height="148" src="<?php echo get_sub_field( 'media_image' )['sizes']['thumbnail']; ?>" alt="<?php echo get_sub_field( 'media_name' ); ?>" class="w-100 h-100 is-image-cover is-rounded--5xs">
</div>