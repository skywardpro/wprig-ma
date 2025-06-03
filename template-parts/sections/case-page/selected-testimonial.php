<?php

/**
 * Template part for displaying Selected Testimonial Section
 *
 * @package wp_rig
 */

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
							The MarketAcross team have been amazing to work with. They play a core role in delivering Splinterlands' messaging globally. Their understanding of the industry and work ethic is unrivaled.
						</p>
					</div>
				</div>

				<!-- PersonColumn -->
				<div class="column is-full is-narrow-desktop">

					<div class="is-flex align-items--center flex-direction--column__desktop align-items--flex-start__desktop mr-l__desktop">

						<!-- Avatar -->
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/person.png" alt="Person Name" class="selected-testimonial__avatar is-rounded--4xs mr-xs mr-0__desktop mb-xs__desktop">

						<!-- About -->
						<div class="">
							<span class="is-block typo--body-big typo--medium mb-4xs typo--subtitle-big__desktop typo--regular__desktop">
								Sandeep Nailwal
							</span>
							<span class="is-block typo--body-small color--gray typo--body__desktop typo--medium">
								Co-founder & COO
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>