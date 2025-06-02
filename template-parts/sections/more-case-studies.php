<?php

/**
 * Template part for displaying More Case Studies Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="more-case-studies" class="more-case-studies py-2xl bg-color--middle-purple">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-big typo--regular color--white mt-0 mb-m typo--h3__tablet typo--light__tablet">
			More Case Studies
		</h2>

		<?php
		$query = new \WP_Query( array(
			'post_type' => 'case_study',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'post__not_in' => array(get_the_ID())
		) );

		if ( $query->have_posts() ) {
			?>
			<!-- Swiper -->
			<div class="swiper more-case-studies-swiper overflow--visible mb-m mb-l__tablet mb-4xl__widescreen">
				<div class="swiper-wrapper align-items--stretch">
					<?php
					while ( $query->have_posts() ) {

						$query->the_post();
						?>
						<!-- Swiper Card -->
						<div class="swiper-slide more-case-studies-swiper__slide has-box-shadow p-m bg-color--white is-rounded--4xs is-relative p-4xl__tablet p-l__widescreen p-4xl__fullhd">

							<!-- Link -->
							<a href="<?php echo get_permalink( get_the_ID() ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>

							<div class="columns is-multiline my-0 is-variable is-6-widescreen">
								<div class="column py-0 is-full-tablet">

									<!-- Logo -->
									<img width="224" height="48" src="<?php echo get_field( 'company_logo', get_the_ID() )['url'] ?>" alt="<?php echo get_field( 'company_name', get_the_ID() ) ?>" class="more-case-studies__logo mx-auto mb-xs mb-m__tablet ml-0__tablet">
								</div>
								<div class="column py-0 is-full-tablet">

									<!-- Text -->
									<p class="more-case-studies-swiper__text has-text-centered has-text-left-tablet typo--body-big mt-0 mb-m mb-2xl__tablet">
										<?php echo get_field( 'featured_text', get_the_ID() ) ?>
									</p>
								</div>
								<div class="column py-0 is-full-tablet">

									<!-- StatsNumbers -->
									<div class="is-flex justify-content--center align-items--flex-end justify-content--flex-start__tablet mr-auto__desktop">
										<div class="pr-xs">

											<!-- StatName -->
											<span class="is-block has-text-centered color--gray typo--body typo--medium mb-2xs has-text-left-tablet">
												Published Articles
											</span>

											<!-- StatValue -->
											<span class="is-block has-text-centered typo--h3 typo--light typo--unbounded is-uppercase line-height--1 has-text-left-tablet typo--h1__tablet">
												<?php echo get_field( 'published_articles', get_the_ID() ) ?>
											</span>
										</div>
										<div class="pl-xs">

											<!-- StatName -->
											<span class="is-block has-text-centered color--gray typo--body typo--medium mb-2xs has-text-left-tablet">
												Online readership
											</span>

											<!-- StatValue -->
											<span class="is-block has-text-centered typo--h3 typo--light typo--unbounded is-uppercase line-height--1 has-text-left-tablet typo--h1__tablet">
												<?php echo get_field( 'online_readership', get_the_ID() ) ?>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
				<!-- Pagination -->
				<div class="more-case-studies-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>
			</div>
			<?php
		}
		?>

		<!-- BackToMain -->
		<div class="columns">
			<div class="column is-flex flex-direction--column align-items--flex-start">
				<a href="" class="mb-xs btn--primary is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--primary is-arrowed is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--primary-small is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--primary-small is-arrowed is-full-mobile"> Back to main </a>
			</div>
			<div class="column is-flex flex-direction--column align-items--flex-start">
				<a href="" class="mb-xs btn--white is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--white is-arrowed is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--white-small is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--white-small is-arrowed is-full-mobile"> Back to main </a>
			</div>
			<div class="column is-flex flex-direction--column align-items--flex-start">
				<a href="" class="mb-xs btn--secondary is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--secondary is-arrowed is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--secondary-small is-full-mobile"> Back to main </a>
				<a href="" class="mb-xs btn--secondary-small is-arrowed is-full-mobile"> Back to main </a>
			</div>
		</div>
	</div>
</section>