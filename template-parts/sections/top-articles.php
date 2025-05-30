<?php

/**
 * Template part for displaying Top Articles Section
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
<section id="top-articles" class="top-articles mb-6xl mb-8xl__desktop">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-m">
			[&nbsp;&nbsp;TOP ARTICLES&nbsp;&nbsp;]
		</h2>

		<!-- Top Articles Swiper -->
		<div class="swiper top-articles-swiper overflow--visible">
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
					<!-- Top Articles Swiper Card -->

					<div class="swiper-slide is-flex flex-direction--column top-articles-swiper__slide is-rounded--4xs is-clipped bg-color--white p-m is-relative has-box-shadow">

						<!-- Link -->
						<a href="<?php echo $url ?>" target="_blank" class="link--full-parent"><span class="visuallyhidden"><?php echo $news_source_name . ' on Market Across' ?></span></a>

						<!-- Logo -->
						<img width="80" height="20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/newsroom-<?php echo $news_source_name ?>-logo.webp" alt="<?php echo strtoupper( $news_source_name ) ?> Logo" class="top-articles-swiper__logo mb-2xl" />

						<!-- Title -->
						<h3 class="typo--subtitle-big typo--semibold color--deep-purple mt-0 mb-l ">
							<?php echo get_the_title( $post_id ) ?>
						</h3>

						<!-- Meta Info -->
						<span class="is-block typo--body-small typo--regular color--deep-purple mt-auto mb-2xs">
							<?php echo get_the_date( 'M j, Y', $post_id ) ?>
						</span>

						<!-- Thumbnail -->
						<img width="304" height="193" src="<?php echo get_the_post_thumbnail_url( $post_id, 'medium' ) ?>" alt="<?php echo get_the_title( $post_id ) ?>" class="is-block top-articles-swiper__thumbnail" />
					</div>
					<?php
				}
				?>
			</div>
			<!-- Pagination -->
			<div class="top-articles-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>
		</div>
	</div>
</section>