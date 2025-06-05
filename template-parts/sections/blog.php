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
		<div class="swiper post-swiper overflow--visible">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				foreach ( $post_ids as $post_id ) {
					?>
					<!-- Post Swiper Card -->
					<div class="swiper-slide is-flex flex-direction--column post-swiper__slide is-rounded--4xs is-clipped bg-color--white is-relative">

						<!-- Link -->
						<a href="<?php echo get_permalink( $post_id ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title( $post_id ) ?></span></a>

						<!-- Thumbnail -->
						<img width="304" height="193" src="<?php echo get_the_post_thumbnail_url( $post_id, 'medium' ) ?>" alt="<?php echo get_the_title( $post_id ) ?>" class="is-block post-swiper__thumbnail" />



						<!-- Title -->
						<h3 class="typo--subtitle-big color--deep-purple typo--semibold px-xs mt-xs mb-2xl">
							<?php echo get_the_title( $post_id ) ?>
						</h3>

						<!-- Meta Info -->
						<?php
						$post_date = get_the_date( 'M j, Y', $post_id );
						$author_id = $post->post_author;
						$author_name = get_the_author_meta( 'display_name', $author_id );
						$output = strtoupper( $post_date ) . ' by ' . $author_name;
						?>
						<span class="is-block mt-auto typo--body-small px-xs mb-xs mt-auto typo--regular color--deep-purple">
							<?php echo $output ?>
						</span>
					</div>
					<?php
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="post-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>
		</div>
	</div>
</section>