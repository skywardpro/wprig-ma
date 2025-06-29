<?php

/**
 * Blog Post Swiper
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$args = $args ?? array();
$args = wp_parse_args( $args, array(
	'query' => new \WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'post_status' => 'publish'
	) ),
) );

if ( $args['query']->have_posts() ) {
	?>
	<div class="swiper post-swiper overflow--visible">
		<div class="swiper-wrapper align-items--stretch">
			<?php
			while ( $args['query']->have_posts() ) {

				$args['query']->the_post();

				$category_name = '';
				$terms = get_the_category();
				if ( ! empty( $terms ) && $terms[0]->slug !== 'uncategorized' ) {
					$category_name = $terms[0]->name;
				}
				?>
				<!-- Post Swiper Card -->
				<div class="swiper-slide post-swiper__slide is-flex flex-direction--column is-rounded--4xs is-clipped bg-color--white">

					<!-- Thumbnail -->
					<img width="304" height="193" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title( $post_id ) ?>" class="is-block post-swiper__thumbnail" />

					<div class="is-flex flex-direction--column align-items--start p-xs flex-grow--1">

						<!-- Meta Info -->
						<div class="is-flex align-items--center justify-content--center__tablet typo--body typo--medium typo--body-big__widescreen mb-2xs">
							<span class="typo--body typo--medium color--middle-purple is-uppercase typo--body-big__widescreen"><?php echo $category_name ?></span>
                            <?php echo $category_name ? '<span class="mx-2xs typo--bold">·</span>' : '' ?>
							<span class="typo--body-small typo--regular color--gray typo--body__widescreen"><?php echo get_the_date( 'F j, Y' ) ?></span>
						</div>

						<!-- Title -->
						<h3 class="typo--subtitle-small color--deep-purple typo--semibold mt-0 mb-m typo--subtitle-big__widescreen mb-l__widescreen">
							<?php echo get_the_title() ?>
						</h3>

						<!-- Link -->
						<a href="<?php echo get_permalink() ?>" class="link--arrow-right mt-auto">
							read more
							<span class="icon"></span>
						</a>
					</div>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>
		<!-- Pagination -->
		<div class="post-swiper__pagination mt-m is-flex justify-content--center justify-content--left__tablet align-items--center"></div>
	</div>
	<?php
}
?>