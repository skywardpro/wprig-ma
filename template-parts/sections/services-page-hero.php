<?php

/**
 * Template part for displaying Services Page Hero Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="page-hero-wrapper bg-color--secondary">
	<section class="services-page-hero py-4xl color--white py-xl__tablet pb-4xl__desktop py-6xl__widescreen">
		<div class="container">

			<div class="columns">

				<div class="column mb-xl mb-0__tablet">
					<div class="h-100__tablet is-flex-tablet align-items--center__tablet">
						<div class="">
							<!-- Heading -->
							<h1 class="services-page-hero__heading typo--unbounded typo--h3 typo--light is-uppercase mt-0 mb-m typo--h1__desktop mb-l__desktop">
								We do things <br>a little differently from legacy PR agencies
							</h1>
							<!-- BodyText -->
							<p class="services-page-hero__body-text typo--body-big mb-m mb-l__dsktop typo--medium__desktop ">
								Having worked with more than 300 blockchain companies, we know what makes the industry tick
							</p>
							<!-- Button -->
							<a href="#" class="btn--primary">Let’s talk</a>
						</div>
					</div>
				</div>

				<div class="column services-page-hero__swiper-column">
					<div class="is-flex-tablet justify-content--center__tablet">
						<!-- Logos Slider -->
						<div class="full-width__mobile">
							<div class="swiper vertical-logos-slider">
								<div class="swiper-wrapper">
									<?php
									$slider_items = marketacross_get_logos();
									foreach ( $slider_items as $index => $item ) {
										?>
										<div class="swiper-slide vertical-logos-slider-slide">
											<img src="<?php echo $item['logo']['sizes']['large'] ?>" alt="<?php echo $item['title'] ?>">
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>