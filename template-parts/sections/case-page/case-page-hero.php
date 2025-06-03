<?php

/**
 * Template part for displaying single Case Page Hero Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="page-hero-wrapper">
	<section class="case-page-hero py-xl py-4xl__desktop py-5xl__widescreen">
		<div class="container">

			<div class="case-page-hero__main-columns columns is-desktop">

				<!-- FirstColumn -->
				<div class="column">

					<!-- Logo -->
					<img width="129" height="28" src="<?php echo get_field( 'company_logo' )['sizes']['medium_large'] ?>" alt="<?php echo get_field( 'company_name' ) ?> logo" class="case-page-hero__logo mb-m">

					<!-- Heading -->
					<h2 class="typo--unbounded typo--h3 typo--light is-uppercase mt-0 mb-m typo--h1__desktop">
						<?php echo get_the_title() ?>
					</h2>

					<!-- MetaColumns -->
					<div class="mb-xl mb-l__desktop">
						<div class="case-page-hero__meta-columns columns is-gapless is-multiline">

							<!-- LocationDate -->
							<div class="column is-narrow mb-xs mb-0__tablet order--2__tablet">
								<div class="color--gray is-flex align-items--center pt-4xs">

									<!-- Icon -->
									<svg aria-hidden="true" width="20" height="20" class="mr-3xs">
										<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-location"></use>
									</svg>

									<!-- Text -->
									<span class="typo--body typo--body-big__desktop mr-2xs">
										<?php echo get_field( 'location' ) ?>
									</span>

									<!-- Icon -->
									<svg aria-hidden="true" width="1" height="12" class="mr-m color--deep-purple-10">
										<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-v-line"></use>
									</svg>

									<!-- Text -->
									<span class="typo--body typo--body-big__desktop">
										<?php echo get_field( 'date' ) ?>
									</span>
								</div>
							</div>

							<!-- Tags -->
							<?php
							$terms = wp_get_post_terms( get_the_ID(), 'case_study_tag' );

							if (isset($terms) && is_array( $terms ) && sizeof( $terms ) ) {
								?>
								<div class="column is-narrow mr-xs__tablet mb-xs">
									<div class="case-page-hero__tags is-flex flex-wrap--wrap">
										<?php
										foreach ( $terms as $term ) {
											?>
											<span class="is-block typo--body py-5xs px-2xs is-rounded--s bg-color--white-60 typo--body-big__desktop py-4xs__desktop">
												<?php echo $term->name ?>
											</span>
											<?php
										}
										?>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>

					<!-- Subheading -->
					<h3 class="typo--unbounded typo--h3 typo--light mt-0 mb-xs mb-m__desktop">
						About <?php echo get_field( 'company_name' ) ?>
					</h3>

					<!-- AoutText -->
					<p class="typo--body typo--body-big__desktop mt-0 mb-m mb-0__desktop">
						<?php echo get_field( 'about' ) ?>
					</p>
				</div>

				<!-- SecondColumn -->
				<div class="case-page-hero__second-main-column column is-narrow">

					<!-- StatsColumns -->
					<div class="mb-xs mb-m__tablet mb-xs__desktop">
						<div class="case-page-hero__stats-columns columns is-multiline is-mobile">

							<!-- Card -->
							<div class="column is-half-mobile is-one-quarter-tablet is-half-desktop ">
								<div class="case-page-hero__stats-card bg-color--white-60 is-rounded--4xs is-flex flex-direction--column p-xs ">
									<span class="is-block typo--body typo--body-big__desktop">Published Articles</span>
									<span class="is-block typo--unbounded typo--h3 typo--light is-uppercase mt-auto typo--h1__desktop">
										<?php echo get_field( 'published_articles' ) ?>
									</span>
								</div>
							</div>

							<!-- Card -->
							<div class="column is-half-mobile is-one-quarter-tablet is-half-desktop ">
								<div class="case-page-hero__stats-card bg-color--white-60 is-rounded--4xs is-flex flex-direction--column p-xs ">
									<span class="is-block typo--body typo--body-big__desktop">Social Shares</span>
									<span class="is-block typo--unbounded typo--h3 typo--light is-uppercase mt-auto typo--h1__desktop">
										<?php echo get_field( 'social_shares' ) ?>
									</span>
								</div>
							</div>

							<!-- Card -->
							<div class="column is-half-mobile is-one-quarter-tablet is-half-desktop ">
								<div class="case-page-hero__stats-card bg-color--white-60 is-rounded--4xs is-flex flex-direction--column p-xs ">
									<span class="is-block typo--body typo--body-big__desktop">Estimated views</span>
									<span class="is-block typo--unbounded typo--h3 typo--light is-uppercase mt-auto typo--h1__desktop">
										<?php echo get_field( 'estimated_views' ) ?>
									</span>
								</div>
							</div>

							<!-- Card -->
							<div class="column is-half-mobile is-one-quarter-tablet is-half-desktop ">
								<div class="case-page-hero__stats-card bg-color--white-60 is-rounded--4xs is-flex flex-direction--column p-xs ">
									<span class="is-block typo--body typo--body-big__desktop">Online readership</span>
									<span class="is-block typo--unbounded typo--h3 typo--light is-uppercase mt-auto typo--h1__desktop">
										<?php echo get_field( 'online_readership' ) ?>
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- CTABtn -->
					<div class="is-flex justify-content--center">
						<a href="<?php echo get_field( 'external_link' ) ?>" target="_blank" class="btn--white is-arrowed is-full-mobile w-100__desktop">See full campaign</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>