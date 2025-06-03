<?php

/**
 * Template part for displaying Influencer Marketing Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="influencer-marketing" class="influencer-marketing py-2xl">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-m">
			[&nbsp;&nbsp;INFULUENCER MARKETING&nbsp;&nbsp;]
		</h2>

		<!-- Swiper -->
		<?php
		if ( have_rows( 'influencer_marketing_repeater' ) ) {
			?>
			<div class="swiper influencer-marketing-swiper overflow--visible">
				<div class="swiper-wrapper align-items--stretch">
					<?php
					while ( have_rows( 'influencer_marketing_repeater' ) ) {

						the_row();
						?>
						<!-- Swiper Card -->
						<div class="swiper-slide has-box-shadow is-flex flex-direction--column influencer-marketing-swiper__slide is-rounded--4xs is-clipped bg-color--white is-relative p-xs">

							<!-- Link -->
							<a href="<?php echo get_sub_field( 'influencer_link_url' ) ?>" target="_blank" class="link--full-parent"><span class="visuallyhidden"><?php echo get_sub_field( 'influencer_title' ) ?></span></a>

							<!-- Title -->
							<h3 class="influencer-marketing-swiper__title typo--body-big typo--medium mt-0 mb-xl typo--h2__desktop typo--regular__desktop">
								<?php echo get_sub_field( 'influencer_title' ) ?>
							</h3>

							<!-- Footer -->
							<div class="is-flex justify-content--space-between align-items--flex-end mt-auto">

								<!-- LeftColumn -->
								<div class="is-flex align-items--center">

									<!-- Avatar -->
									<img width="32" height="32" src="<?php echo get_sub_field( 'influencer_image' ) ?>" alt="<?php echo get_sub_field('influencer_name') ?>" class="influencer-marketing-swiper__avatar is-rounded--full mr-3xs" />

									<!-- Name -->
									<span class="typo--body typo--medium typo--subtitle-small__desktop typo--semibold__desktop">
										<?php echo get_sub_field( 'influencer_name' ) ?>
									</span>
								</div>

								<!-- Date -->
								<span class="typo--body-small color--gray">
									<?php echo get_sub_field( 'influencer_date' ) ?>
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
			<?php
		}
		?>
	</div>
</section>