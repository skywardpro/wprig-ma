<?php

/**
 * Template part for displaying Testimonials Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$post_ids = get_posts( array(
	'post_type' => 'testimonial',
	'numberposts' => 10,
	'fields' => 'ids'
) );

?>
<section id="testimonials" class="testimonials mb-6xl">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__tablet typo--regular color--purple mt-0 mb-xs mb-m__tablet">
			[ TESTIMONIALS ]
		</h2>

		<!-- Subheading -->
		<p class="typo--unbounded typo--h3 typo--light typo--h1__desktop mb-xl mb-3xl__widescreen">
			DON’T TAKE OUR
			<br class="is-hidden-tablet">WORD FOR IT
		</p>

		<!-- Swiper -->
		<div class="swiper testimonials-swiper is-overflow--vissible mb-xl mb-m__tablet mb-xl__desktop mb-3xl__widescreen">
			<div class="swiper-wrapper align-items--stretch">
				<?php
				foreach ( $post_ids as $post_id ) {
					?>
					<!-- Slide -->
					<div class="swiper-slide testimonials-swiper__slide is-flex flex-direction--column">

						<!-- Ava -->
						<div class="testimonials-swiper__ava-wrapper mr-auto mb-m">
							<img width="64" height="64" src="<?php echo get_field('author_image', $post_id)['sizes']['thumbnail'] ?>" alt="" class="testimonials-swiper__ava is-rounded--full is-clipped">
						</div>

						<!-- Quote -->
						<p class="typo--body-big typo--medium mt-0 mb-m typo--body__tablet mb-l__tablet typo--body-big__widescreen mb-m__widescreeen">
							<?php echo get_field('testimonial_text', $post_id) ?>                        
						</p>

						<!-- Name -->
						<span class="typo--subtitle-small typo--semibold mt-auto mb-3xs typo--subtitle-big__widescreen">
							<?php echo get_field('author_name', $post_id) ?>
						</span>
						<!-- Company -->
						<span class="typo--body-big color--gray typo--medium">
                            <?php echo get_field('author_position', $post_id) ?>
						</span>
					</div>
					<?php
				}
				?>
			</div>

			<!-- Pagination -->
			<div class="testimonials-swiper__pagination mt-m is-flex justify-content--center justify-content--flex-start__tablet align-items--center mt-xl__desktop mt-3xl__widescreen"></div>

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

		<!-- CTA -->
		<div class="is-flex flex-direction--column align-items--center__tablet">
			<p class="typo--body-big typo--medium mb-xs mb-m__tablet typo--semibold__tablet has-text-centered__tablet">
				Schedule a call with
				<br class="is-hidden-tablet">us and share your challenge
			</p>
			<a href="#" class="btn--primary-small is-flex is-hidden-tablet">
				Let’s talk
			</a>
			<a href="#" class="btn--primary is-hidden-mobile">
				Let’s talk
			</a>
		</div>
	</div>
</section>