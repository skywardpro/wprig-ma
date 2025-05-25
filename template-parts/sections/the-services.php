<?php

/**
 * Template part for displaying Newsroom Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$post_ids = get_posts( array(
	'post_type' => 'news',
	'numberposts' => 10,
	'fields' => 'ids'
) );

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
		<p class="typo--subtitle typo--h2__desktop mt-0 mb-m mb-l__desktop">
			<mark class="bg-color--purple-30">Services generate results, and that's what you pay for.</mark> Everything we do behind the scenes to get you these results, we don't bill for that.
		</p>
        <p class="typo--subtitle typo--h2__desktop mt-0 mb-l mb-xl__desktop mb-4xl__widescreen">
            <mark class="bg-color--purple-30">Messaging strategy, pitching journalists, being immersed in the industry - we don't count these as services.</mark> These are the things we do internally in order to be able to deliver on the services you hired us for.
        </p>

		<!-- Newsroom Swiper -->
		<div class="swiper newsroom-swiper overflow--visible mt-0 mb-l mb-xl__tablet mb-4xl__widescreen">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				foreach ( $post_ids as $post_id ) {

					$url = get_post_meta( $post_id, '_manp_source_url', true );
					$host = parse_url( $url, PHP_URL_HOST ); // "en.example.com"				
					$news_source_name = 'undefined';
					if ( preg_match( '/^(?:.*\.)?([a-zA-Z0-9-]+)\.[a-zA-Z]{2,}$/', $host, $matches ) ) {
						$news_source_name = $matches[1]; // "example"
					}
					?>
					<!-- newsroom Swiper Card -->

					<a href="<?php echo $url ?>" target="_blank" class="swiper-slide is-flex flex-direction--column newsroom-swiper__slide is-rounded--4xs is-clipped bg-color--white p-m">

						<!-- Logo -->
						<img width="80" height="20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/newsroom-<?php echo $news_source_name ?>-logo.webp" alt="<?php echo strtoupper( $news_source_name ) ?> Logo" class="newsroom-swiper__logo mb-2xl" />

						<!-- Ttile -->
						<h3 class="typo--subtitle-big typo--semibold color--deep-purple mt-0 mb-l ">
							<?php echo get_the_title( $post_id ) ?>
						</h3>

						<!-- Meta Info -->
						<span class="is-block typo--body-small typo--regular color--deep-purple mt-auto mb-2xs">
							<?php echo get_the_date( 'M j, Y', $post_id ) ?>
						</span>

						<!-- Thumbnail -->
						<img width="304" height="193" src="<?php echo get_the_post_thumbnail_url( $post_id, 'medium' ) ?>" alt="<?php echo get_the_title( $post_id ) ?>" class="is-block newsroom-swiper__thumbnail" />
					</a>
					<?php
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="newsroom-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>

			<!-- Prev & Next -->
			<div class="swiper-button-prev is-hidden-touch">
				<svg aria-hidden="true" width="22" height="17">
					<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-arrow-left"></use>
				</svg>
			</div>
			<div class="swiper-button-next is-hidden-touch">
				<svg aria-hidden="true" width="22" height="17">
					<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-arrow-right"></use>
				</svg>
			</div>
		</div>

        <div class="is-flex justify-content--center__tablet">
            <a href="#" class="btn--primary is-full-mobile mt-0">Let’s talk</a>
        </div>
	</div>
</section>