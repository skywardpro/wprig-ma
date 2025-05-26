<?php

/**
 * Template part for displaying The Services Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="the-services" class="the-services py-6xl py-7xl__widescreen">
	<div class="container">

		<!-- Heading -->
		<h2 class="is-uppercase typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-xs mb-m__desktop">
			[&nbsp;&nbsp;The services&nbsp;&nbsp;]
		</h2>

		<!-- Subheading -->
		<p class="typo--h3 typo--light typo--unbounded typo--h1__desktop mt-0 mb-l mb-xl__desktop mb-4xl__widescreen">
			Before jumping into the services, let’s just set the baseline
		</p>

		<!-- Text -->
		<p class="typo--subtitle typo--height-15 typo--h2__desktop typo--height-15__desktop mt-0 mb-m mb-l__desktop">
			<mark class="bg-color--purple-30">Services generate results, and that's what you pay for.</mark> Everything we do behind the scenes to get you these results, we don't bill for that.
		</p>
		<p class="typo--subtitle typo--height-15 typo--h2__desktop typo--height-15__desktop mt-0 mb-l mb-xl__desktop mb-4xl__widescreen">
			<mark class="bg-color--purple-30">Messaging strategy, pitching journalists, being immersed in the industry - we don't count these as services.</mark> These are the things we do internally in order to be able to deliver on the services you hired us for.
		</p>

		<?php
		$dummy_card = array(
			'title' => 'Hello World',
			'subtitle' => 'Yeh! We know that we best!',
			'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Exercitationem sequi ducimus, dolore, doloremque quis ut culpa perferendis voluptatibus natus numquam consectetur quasi corporis ea blanditiis iusto sunt laborum, recusandae consequuntur in velit! Voluptatibus, fugiat. <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. ',
			'tags' => array(
				'op-eds',
				'podcasts',
				'expert quotes',
				'data citations',
				'commentaries',
				'interviews',
				'newsjacking'
			),
			'image_url' => get_stylesheet_directory_uri() . '/assets/images/the-services-slider-card-bg.webp'
		);
		?>
		<!-- The Services Swiper -->
		<div class="swiper the-services-swiper overflow--visible mt-0 mb-l mb-xl__tablet mb-4xl__widescreen overflow--hidden__widescreen">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				for ( $i = 0; $i < 5; $i++ ) {
					?>
					<!-- The Services Swiper Card -->
					<div class="swiper-slide is-flex flex-direction--column the-services-swiper__slide is-rounded--4xs is-clipped bg-color--white p-m color--white <?php echo $i === 0 ? 'active' : '' ?>">
						<div class="the-services-swiper__slide-face is-flex h-100 flex-direction--column">

							<!-- BgImage -->
							<img width="320" height="526" src="<?php echo $dummy_card['image_url'] ?>" alt="<?php echo $dummy_card['title'] ?>" class="the-services-swiper__slide-bg">

							<!-- Title -->
							<h3 class="typo--h1 typo--light mt-0 mb-2xs">
								<?php echo $dummy_card['title'] ?>
							</h3>

							<!-- Subtitle -->
							<p class="typo--body-big my-0 overflow--hidden">
								<?php echo $dummy_card['subtitle'] ?>
							</p>

							<!-- Toggle -->
							<button class="the-services-swiper__slide-open reset-button-styles is-rounded--full mt-auto ml-auto flex-shrink--0"></button>
						</div>
						<!-- Overlay -->
						<div class="the-services-swiper__slide-overlay p-xs p-m__desktop p-xs__widescreen p-m__fullhd">
							<div class="is-flex h-100 flex-direction--column">
								<!-- Text -->
								<p class="the-services-swiper__slide-overlay-text typo--body typo--medium ">
									<?php echo $dummy_card['text'] ?>
								</p>

								<div class="mt-auto">
									<!-- TagsCaption -->
									<span class="is-block color--white-60 typo--body typo--medium mb-2xs">Full features:</span>
									<div class="is-flex align-items--flex-end">

										<!-- TagsCloud -->
										<div class="the-services-swiper__tags mr-2xs">
											<?php
											foreach ( $dummy_card['tags'] as $tag ) {
												?>
												<span class="typo--body typo--medium color--white is-rounded--s bg-color--white-10 py-4xs px-3xs">
													<?php echo $tag ?>
												</span>
												<?php
											}
											?>
										</div>

										<!-- CloseBtn -->
										<button class="the-services-swiper__slide-close reset-button-styles is-rounded--full mt-auto ml-auto flex-shrink--0"></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="the-services-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center is-hidden-widescreen"></div>
		</div>

		<div class="is-flex justify-content--center__tablet">
			<a href="#" class="btn--primary is-full-mobile mt-0">Let’s talk</a>
		</div>
	</div>
</section>