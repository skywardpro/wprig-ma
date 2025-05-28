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
<section id="newsroom" class="newsroom mb-6xl mb-8xl__desktop">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--white mt-0 mb-xs mb-xl__desktop mb-m__widescreen">
			[&nbsp;&nbsp;NEWSROOM&nbsp;&nbsp;]
		</h2>

		<!-- Subheading -->
		<div class="typo--h3 typo--light color--white typo--unbounded typo--h1__desktop mb-l mb-xl__desktop mb-4xl__widescreen">
			LATEST MEDIA HITS <br class="is-hidden-tablet">WE <br class="is-hidden-mobile">LANDED FOR OUR CLIENTS
		</div>

		<!-- Newsroom Swiper -->
		<div class="swiper newsroom-swiper overflow--visible">
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

					<div class="swiper-slide is-flex flex-direction--column newsroom-swiper__slide is-rounded--4xs is-clipped bg-color--white p-m is-relative">

						<!-- Link -->
						<a href="<?php echo $url ?>" target="_blank" class="link--full-parent"><span class="visuallyhidden"><?php echo $news_source_name . ' on Market Across' ?></span></a>

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
					</div>
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
	</div>
</section>