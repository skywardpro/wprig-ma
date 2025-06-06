<?php

/**
 * Template part for displaying Selected Testimonial Section
 *
 * @package wp_rig
 */

$testimonial_post_id = get_field( 'case_selected_testimonial' )[0] ?? null;

?>

<section id="selected-testimonial" class="selected-testimonial py-2xl">
	<div class="container">

		<!-- Card -->
		<div class="bg-color--white-60 is-rounded--4xs p-xs p-l__desktop">
			<!-- Columns -->
			<div class="columns is-gapless is-multiline">

				<!-- QuoteColumn -->
				<div class="column is-full-touch order--2__desktop">
					<div class="selected-testimonial__quote pb-m mb-m pb-0__desktop mb-0__desktop">

						<!-- Icon -->
						<svg aria-hidden="true" width="24" height="24" class="selected-testimonial__icon color--deep-purple mb-2xs">
							<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-quote"></use>
						</svg>

						<!-- Text -->
						<p class="mt-0 mb-0 typo--body-big typo--h2__desktop">
							<?php echo get_field( 'testimonial_text', $testimonial_post_id ) ?>
						</p>
					</div>
				</div>

				<!-- PersonColumn -->
				<div class="column is-full is-narrow-desktop">

					<div class="is-flex align-items--center flex-direction--column__desktop align-items--flex-start__desktop mr-l__desktop">

						<!-- Avatar -->
						<img src="<?php echo get_field( 'author_image', $testimonial_post_id )['url'] ?>" alt="<?php echo get_field( 'author_name', $testimonial_post_id ) ?>" class="selected-testimonial__avatar is-rounded--4xs mr-xs mr-0__desktop mb-xs__desktop">

						<!-- About -->
						<div class="">
							<span class="is-block typo--body-big typo--medium mb-4xs typo--subtitle-big__desktop typo--regular__desktop">
								<?php echo get_field( 'author_name', $testimonial_post_id ) ?>
							</span>
							<span class="is-block typo--body-small color--gray typo--body__desktop typo--medium">
								<?php echo get_field( 'author_position', $testimonial_post_id ) ?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>