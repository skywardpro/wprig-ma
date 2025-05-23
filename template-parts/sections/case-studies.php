<?php

/**
 * Template part for displaying Case Studies Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$post_ids = get_posts( array(
	'post_type' => 'case_study',
	'numberposts' => 6,
	'fields' => 'ids'
) );

?>
<section id="case-studies" class="case-studies mb-6xl mb-8xl__desktop pb-xl__widescreen">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-xs mb-m__desktop">
			[&nbsp;&nbsp;CASE STUDIES&nbsp;&nbsp;]
		</h2>

		<!-- Subheading -->
		<p class="typo--h3 typo--unbounded typo--light mt-0 mb-xs mb-m__desktop typo--h2__desktop">
			IT’S ALL ABOUT <br class="is-hidden-desktop">THE RESULTS
		</p>

		<!-- Caption -->
		<p class="typo--body-big typo--medium mt-0 mb-l typo--subtitle-big__desktop typo--semibold__desktop mb-3xl__widescreen">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit
		</p>

		<!-- Post Swiper (mobile) & Grid (desktop) -->
		<div class="swiper case-studies-swiper overflow--visible mb-l mb-xl__desktop">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				foreach ( $post_ids as $index => $post_id ) {
					?>
					<!-- Post Swiper Card -->
					<a href="<?php echo get_permalink( $post_id ) ?>" class="swiper-slide is-flex flex-direction--column case-studies-swiper__slide is-rounded--4xs bg-color--white-60 p-m p-xl__desktop has-corner-decor">

                        <!-- Number -->
                        <span class="color--gray typo--body-smal mb-xs">
							<?php echo sprintf("%02d", $index + 1) ?>
                        </span>

						<!-- Text -->
						<p class="color--deep-purple typo--subtitle-big typo--semibold  mt-0 mb-xl mb-m__desktop mb-2xl__fullhd">
							<?php echo get_field('featured_text', $post_id) ?>
						</p>

						<!-- Logo -->
						<img width="135" height="30" src="<?php echo get_field( 'company_logo', $post_id )['sizes']['thumbnail'] ?>" alt="<?php echo get_field('company_name', $post_id) ?> logo" class="is-block mt-auto case-studies-swiper__thumbnail" />

					</a>
					<?php
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="case-studies-swiper__pagination mt-m is-flex justify-content--center align-items--center is-hidden-desktop"></div>
		</div>

		<!-- CTA Button -->
		<div class="is-flex justify-content--center">
			<a href="<?php home_url() ?>/case-studies" class="btn--primary-small is-full-mobile">More case studies</a>
		</div>
	</div>
</section>