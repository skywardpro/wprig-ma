<?php

/**
 * Template part for displaying Reddit Traction Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="reddit-traction" class="reddit-traction py-2xl">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-m">
			[&nbsp;&nbsp;REDDIT TRACTION&nbsp;&nbsp;]
		</h2>

		<?php
		$query = new \WP_Query( array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'post_status' => 'publish'
		) );

		if ( $query->have_posts() ) {
			?>
			<!-- Swiper -->
			<div class="swiper reddit-traction-swiper overflow--visible">
				<div class="swiper-wrapper align-items--stretch">
					<?php
					while ( $query->have_posts() ) {
						$query->the_post();
						?>
						<!-- Swiper Card -->
						<div class="swiper-slide has-box-shadow is-flex flex-direction--column reddit-traction-swiper__slide is-rounded--4xs is-clipped bg-color--white is-relative">

							<!-- Link -->
							<a href="<?php echo get_permalink() ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>

							<!-- Thumbnail -->
							<img width="304" height="193" src="<?php echo get_the_post_thumbnail_url( size: 'medium' ) ?>" alt="<?php echo get_the_title() ?>" class="is-block is-rounded--4xs reddit-traction-swiper__thumbnail" />

							<!-- Text Content -->
							<div class="is-flex flex-direction--column h-100 p-xs">

								<!-- Title -->
								<h3 class="reddit-traction-swiper__title typo--subtitle-big typo--medium mt-0 mb-3xs typo--h2__desktop typo--regular__desktop">
									<?php echo get_the_title() ?>
								</h3>

								<!-- Stats -->
								<div class="is-flex align-items--center color--gray mb-xl">

									<!-- Icon -->
									<svg aria-hidden="true" width="20" height="20" class="mr-5xs">
										<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-arrow-up"></use>
									</svg>

									<!-- Value -->
									<span class="mr-2xs">115</span>

									<!-- Icon -->
									<svg aria-hidden="true" width="20" height="20" class="mr-5xs">
										<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-chat"></use>
									</svg>

									<!-- Value -->
									<span class="">39</span>
								</div>

								<!-- Footer -->
								<div class="is-flex justify-content--space-between align-items--flex-end mt-auto">
									<!-- RedditLogo -->
									<img width="40" height="40" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reddit-logo.svg" alt="Reddit Logo" />
									<!-- Date -->
									<span class="typo--body-small color--gray">
										<?php echo get_the_date( 'M j, Y' ) ?>
									</span>
								</div>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
				<!-- Pagination -->
				<div class="reddit-traction-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>
			</div>
			<?php
		}
		?>
	</div>
</section>