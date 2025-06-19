<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

// Use the main query instead of custom WP_Query for proper pagination
// The main query will automatically handle pagination parameters

?>
	<main id="primary" class="site-main is-relative">

		<div class="blog-blur blog-blur--top"></div>
		<div class="blog-blur blog-blur--bottom"></div>
		<div class="blog-bg-grid">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/blog-grid-bg.svg" alt="Blog background">
		</div>
		<section class="blog-header my-l my-xl__tablet my-4xl__desktop my-5xl__widescreen is-relative">
			<div class="container">
				<h1 class="typo--unbounded typo--h1 typo--light typo--regular__desktop is-uppercase">The Market Across <br class="is-hidden-mobiile">Blog</h1>
			</div>
		</section>

		<?php if ( have_posts() ) : ?>
			<section class="blog-posts mb-3xl mb-4xl__tablet mb-5xl__desktop mb-6xl__widescreen">
				<div class="container blog-posts__header">
					<?php
					// Get all categories that have posts, excluding "Uncategorized"
					$categories = get_categories(array(
						'hide_empty' => true, // Only show categories with posts
						'exclude'    => array(1), // Exclude "Uncategorized" category (ID 1)
						'orderby'    => 'name',
						'order'      => 'ASC'
					));

					if (!empty($categories)) {
						echo '<ul class="blog-posts__header-list p-0 m-0 px-m px-0__tablet">';
						echo '<li class="blog-posts__header-item">';
							echo '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '" class="blog-posts__header-link btn--tab ' . (is_home() && !is_category() ? 'is-active' : '') . '">';
							echo 'All';
							echo '</a>';
						echo '</li>';
						foreach ($categories as $category) {
							echo '<li class="blog-posts__header-item">';
							echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="blog-posts__header-link btn--tab ' . (is_category($category->term_id) ? 'is-active' : '') . '">';
							echo esc_html($category->name);
							echo '</a>';
							echo '</li>';
						}
						echo '</ul>';
					}
					?>
				</div>

				<div class="container mt-s mt-m__tablet">
					<div class="blog-posts__wrapper mb-3xl mb-4xl__tablet">
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="blog-posts__item bg-color--white-30 is-clipped is-flex flex-direction--column">
								<?php if (has_post_thumbnail()) : ?>
									<div class="blog-posts__item-image is-relative">
										<a href="<?php the_permalink(); ?>">
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
								<?php else : ?>
									<div class="blog-posts__item-image is-flex align-items--center justify-content--center bg-color--middle-purple">
										<span class="blog-posts__item-image-placeholder color--white">No image</span>
									</div>
								<?php endif; ?>
								<div class="blog-posts__item-content p-xs flex-grow--1 is-flex flex-direction--column">
									<div class="is-flex align-items--center mb-xs">
										<?php
										$categories = get_the_category();
										if (!empty($categories)) {
											$category_name = $categories[0]->name;
											echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="typo--medium color--middle-purple">' . esc_html($category_name) . '</a>';
											echo '<span class="typo--medium mx-xs">&middot;</span>';
										}
										?>
										<?php
										$author_name = get_the_author();
										?>
										<span>
											By
											<span class="typo--medium typo--body-big__desktop">
												<?php echo esc_html($author_name); ?>
											</span>
										</span>
									</div>
									<h2 class="typo--unbounded typo--body-big typo--h3__desktop typo--regular typo--light__desktop mt-0 mb-3xs mb-xs__desktop">
									<a href="<?php the_permalink(); ?>" class="color--deep-purple"><?php the_title(); ?></a>
									</h2>
									<p class="m-0 color--gray mb-xl mb-l__desktop">
										<?php the_excerpt(); ?>
									</p>
									<div class="is-flex align-items--flex-end mt-auto">
										<a href="<?php the_permalink(); ?>" class="link--arrow-right">
											Read more
											<span class="icon"></span>
										</a>
										<span class="typo--medium color--gray ml-auto">
											<?php echo get_the_date('F j, Y'); ?>
										</span>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php
				custom_pagination();
				?>
				</div>
			</section>

		<?php else : ?>
			<section class="blog-posts mb-3xl mb-4xl__tablet">
				<div class="container">
					<h2 class="typo--unbounded typo--h2 typo--light typo--regular__desktop is-uppercase">No posts found</h2>
				</div>
			</section>
		<?php endif; ?>

		<?php
		// if ( have_posts() ) {

		// 	get_template_part( 'template-parts/content/page_header' );

		// 	while ( have_posts() ) {
		// 		the_post();

		// 		get_template_part( 'template-parts/content/entry', get_post_type() );
		// 	}

		// 	if ( ! is_singular() ) {
		// 		get_template_part( 'template-parts/content/pagination' );
		// 	}
		// } else {
		// 	get_template_part( 'template-parts/content/error' );
		// }
		?>
	</main> <!-- #primary -->
<?php
// get_sidebar();
get_footer();
