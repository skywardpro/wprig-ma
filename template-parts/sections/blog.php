<?php

/**
 * Template part for displaying Blog Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$post_ids = get_posts( array(
	'post_type' => 'post',
	'numberposts' => 10,
	'fields' => 'ids'
) );

?>
<section id="blog" class="blog mb-6xl mb-8xl__desktop">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-xl mb-m__tablet mb-xl__desktop mb-3xl__widescreen">
			[&nbsp;&nbsp;BLOG&nbsp;&nbsp;]
		</h2>

		<!-- Post Swiper -->
		<?php get_template_part('template-parts/components/post-swiper') ?>
	</div>
</section>