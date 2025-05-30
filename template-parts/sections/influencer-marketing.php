<?php

/**
 * Template part for displaying Influencer Marketing Section
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
<section id="influencer-marketing" class="influencer-marketing py-2xl">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-m">
			[&nbsp;&nbsp;INFULUENCER MARKETING&nbsp;&nbsp;]
		</h2>

		<!-- Swiper -->
		<div class="swiper influencer-marketing-swiper overflow--visible">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				foreach ( $post_ids as $post_id ) {
					?>
					<!-- Swiper Card -->
					<div class="swiper-slide has-box-shadow is-flex flex-direction--column influencer-marketing-swiper__slide is-rounded--4xs is-clipped bg-color--white is-relative p-xs">

						<!-- Link -->
						<a href="<?php echo get_permalink( $post_id ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title( $post_id ) ?></span></a>

						<!-- Title -->
						<h3 class="influencer-marketing-swiper__title typo--body-big typo--medium mt-0 mb-xl typo--h2__desktop typo--regular__desktop">
							<?php echo get_the_title( $post_id ) ?>
						</h3>

						<!-- Footer -->
						<div class="is-flex justify-content--space-between align-items--flex-end mt-auto">

							<!-- LeftColumn -->
							<div class="is-flex align-items--center">

								<!-- Avatar -->
								<img width="32" height="32" src="<?php echo get_the_post_thumbnail_url( $post_id ) ?>" alt="Reddit Logo" class="influencer-marketing-swiper__avatar is-rounded--full mr-3xs" />

								<!-- Name -->
								<span class="typo--body typo--medium typo--subtitle-small__desktop typo--semibold__desktop">My Financial Friend</span>
							</div>

							<!-- Date -->
							<span class="typo--body-small color--gray">
								<?php echo get_the_date( 'M j, Y', $post_id ) ?>
							</span>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="influencer-marketing-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>
		</div>
	</div>
</section>