<?php

/**
 * Template part for displaying Case Studies Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;

?>
<section id="case-studies" class="case-studies mb-6xl mb-8xl__desktop pb-xl__widescreen">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small is-uppercase typo--tag-big__desktop typo--regular color--purple mt-0 mb-m">
			[&nbsp;&nbsp;CLIENTS CASE STUDIES&nbsp;&nbsp;]
		</h2>

		<!-- Clients Case Studies Swiper -->
		<?php
		$query = new WP_Query( array(
			'post_type' => 'case_study',
			'numberposts' => 2,
		) );
		?>
		<div class="swiper clients-case-studies-swiper overflow--visible mb-l mb-xl__desktop">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();

						?>
						<div class="swiper-slide clients-case-studies-swiper__slide has-box-shadow is-relative bg-color--white is-rounded--4xs p-m p-4xl__tablet is-flex flex-direction--column">
							<!-- Link -->
							<!-- <a href="<?php echo get_permalink( get_the_ID() ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a> -->

							<!-- Logo -->
							<img width="224" height="48" src="<?php echo get_field( 'company_logo', get_the_ID() )['url'] ?>" alt="<?php echo get_field( 'company_name', get_the_ID() ) ?>" class="clients-case-studies-swiper__slide-logo mb-xs mb-m__tablet is-block mx-auto ml-0__tablet">

							<!-- Description -->
							<p class="clients-case-studies-swiper__slide-description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-m">
								<?php echo get_field( 'featured_text', get_the_ID() ) ?>
							</p>

							<!-- Stats -->
							<div class="is-flex justify-content--center justify-content--flex-start__tablet mt-auto">
								<div class="pr-xs">
									<!-- StatName -->
									<span class="is-block has-text-centered-mobile color--gray typo--body typo--medium mb-3xs">
										Published <br class="is-hidden-tablet">Articles
									</span>
									<!-- StatValue -->
									<span class="is-block has-text-centered-mobile typo--h1 typo--light typo--unbounded is-uppercase">
										<?php echo get_field( 'published_articles', get_the_ID() ) ?>
									</span>
								</div>
								<div class="pl-xs">
									<!-- StatName -->
									<span class="is-block has-text-centered-mobile color--gray typo--body typo--medium mb-3xs">
										Online <br class="is-hidden-tablet">readership
									</span>
									<!-- StatValue -->
									<span class="is-block has-text-centered-mobile typo--h1 typo--light typo--unbounded is-uppercase">
										<?php echo get_field( 'online_readership', get_the_ID() ) ?>
									</span>
								</div>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="clients-case-studies-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet"></div>
		</div>

		<!-- CTA Button -->
		<div class="is-flex justify-content--center">
			<a href="<?php home_url() ?>/case-studies" class="btn--primary-small is-full-mobile">More case studies</a>
		</div>
	</div>
</section>