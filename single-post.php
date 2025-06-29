<?php
/**
 * The template file for Blog Post page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-main">

	<div id="blog-post" class="blog-post">
		<?php
		if ( have_posts() ) {
			the_post();

			$category = '';
			$terms = get_the_category();
			if ( ! empty( $terms ) && $terms[0]->slug !== 'uncategorized' ) {
				$category = $terms[0];
			}

			?>
			<!-- Hero - Section -->
			<div class="blog-post-hero bg-color--gradient py-xl py-2xl__desctop py-4xl__widescreen">
				<!-- Bg -->
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/blog-post-grid-bg.svg" class="blog-post-hero__bg">

				<div class="container">


					<!-- Go Back To Blog -->
					<a href="<?php echo get_home_url() . '/blog/' ?>" class="blog-post-hero__back-to-blog mb-2xl mb-0__tablet mb-xs__tablet">
						<svg aria-hidden="true" width="24" height="24">
							<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-arrow-left"></use>
						</svg>
						<span class="typo--unbounded typo--tag-small is-uppercase typo--regular typo--tag-big__widescreen">Back to the blog</span>
					</a>

					<!-- Body -->
					<div class="blog-post-hero__body has-text-centered-tablet">

						<!-- Category Name -->
						<h3 class="typo--body typo--medium color--purple is-uppercase mt-0 mb-m typo--body-big__desktop">
							<?php echo $category->name ?>
						</h3>

						<!-- Title -->
						<h2 class="typo--inbounded is-uppercase typo--h3 typo--light color--white mt-0 mb-m typo--h1__widescreen">
							<?php echo get_the_title() ?>
						</h2>

						<!-- Meta -->
						<div class="is-flex align-items--center color--white justify-content--center__tablet typo--body typo--medium typo--body-big__widescreen">
							<span><?php echo get_the_author() ?></span> <span class="mx-2xs color--gray typo--h1">·</span> <span><?php echo get_the_date( 'F j, Y' ) ?></span>
						</div>

					</div>
				</div>
			</div>

			<!-- Content -->
			<section class="blog-post-content pb-5xl pb-6xl__tablet pb-7xl__desktop">
				<div class="container">

					<div class="blog-post-content__inner">

						<!-- 3-cards -->
						<div class="blog-post-content__3-cards mb-xl">
							<?php
							$related_posts_ids = get_field( 'related_posts' );
							if ( $related_posts_ids && ! empty( $related_posts_ids ) ) {
								?>
								<!-- Items -->
								<div class="blog-post-content__3-cards-items mb-m">
									<?php
									foreach ( $related_posts_ids as $post_id ) {
										$author_id = get_post_field( 'post_author', $post_id );
										$author_name = get_the_author_meta( 'display_name', $author_id );
										?>
										<!-- Card -->
										<div class="blog-post-content__3-cards-item is-flex is-relative">
											<!-- Link -->
											<a href="<?php echo get_permalink( $post_id ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title( $post_id ) ?></span></a>
											<!-- Image -->
											<img width="72" height="72" src="<?php echo get_the_post_thumbnail_url( $post_id ) ?>" alt="<?php echo get_the_title( $post_id ) ?>" class="blog-post-content__3-cards-item-image mr-3xs flex-shrink--0 mr-2xs__widescreen">
											<!-- Text -->
											<div class="">
												<h3 class="blog-post-content__3-cards-item-title typo--body typo--medium my-0 typo--body-big__widescreen">
													<?php echo get_the_title( $post_id ) ?>
												</h3>
												<span class="typo--body-small typo--regular color--gray-dark typo--height-10 my-0 typo--body__widescreen">
													<?php echo "by $author_name" ?>
												</span>
											</div>
										</div>
										<?php
									}
									?>
								</div>

								<!-- Link -->
								<a href="<?php echo get_category_link( $category ) ?>" class="link--arrow-right">
									See all <?php echo $category->name ?>
									<span class="icon"></span>
								</a>
								<?php
							}
							?>

						</div>

						<!-- post-navigation -->
						<div class="blog-post-content__post-navigation mb-m">
							<!-- Title -->
							<h3 class="blog-post-content__post-navigation-title typo--tag-small typo--regular typo--unbounded is-uppercase mt-0 mb-3xs typo--tag-big__desktop">
								content
							</h3>
							<!-- Menu -->
							<nav class="blog-post-content__post-navigation-items is-flex flex-direction--column"></nav>
						</div>

						<!-- content -->
						<div class="blog-post-content__content mb-m mb-l__tablet mb-xl__desktop mb-2xl__widescreen">
							<?php the_content() ?>
						</div>

						<!-- Share This Post -->
						<?php get_template_part( 'template-parts/components/share-this-page', null, array( 'heading' => 'Share this case', 'class' => 'blog-post-content__share-this-post' ) ) ?>
					</div>
				</div>
			</section>

			<!-- More Posts -->
			<section id="blog" class="blog mb-6xl mb-8xl__desktop">
				<div class="container">

					<!-- Heading -->
					<h2 class="typo--tag-big typo--unbounded typo--regular mb-xs mb-m__desktop typo--h3__widescreen typo--light__widescreen">
						you can also read
					</h2>

					<!-- Post Swiper -->
					<?php
					$post_query = new \WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC'
					));
					?>
					<?php get_template_part( 'template-parts/components/post-swiper', null, array('query' => $post_query) ) ?>
				</div>
			</section>
			?>
			<?php
		}
		?>

	</div>
</main> <!-- #primary -->
<?php
// get_sidebar();
get_footer();
