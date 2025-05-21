<?php

/**
 * Template part for displaying Home Hero Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="home-hero" class="home-hero mb-6xl mb-5xl__tablet mb-8xl__desktop">
	<div class="container">

		<!-- CTA -->
		<div class="mb-7xl ">

			<!-- Heading -->
			<h2 class="is-uppercase typo--unbounded color--white typo--h2 typo--h1__desktop mb-m mb-l__desktop typo--light">
				<sapn class="typo--medium">PR</sapn> for <br class="is-hidden-desktop">the world’s <br class="is-hidden-touch">leading <span class="typo--medium">blockchain</span> <br>companies
			</h2>

			<!-- Button -->
			<a href="#" class="btn--primary">Let’s talk</a>
		</div>

		<!-- Logos Slider Heading-->
		<h3 class="typo--medium color--white mb-m">
			Trusted by our Clients
		</h3>

		<!-- Logos Slider -->
		<div class="full-width">
			<div class="swiper logos-slider">
				<div class="swiper-wrapper">

					<?php
					$slider_items = marketacross_get_logos();
					foreach ( $slider_items as $item ) {
						?>
						<div class="swiper-slide logos-slider-slide">
							<img src="<?php echo $item['logo']['sizes']['large'] ?>" alt="<?php echo $item['title'] ?>">
						</div>
						<?php
					}

					// In case of not enough logos
					if(sizeof($slider_items) < 12) {
						foreach ( $slider_items as $item ) {
							?>
							<div class="swiper-slide logos-slider-slide">
								<img src="<?php echo $item['logo']['sizes']['large'] ?>" alt="<?php echo $item['title'] ?>">
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>