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
						Category 1
					</h3>
					<h2 class="typo--inbounded is-uppercase typo--h3 typo--light color--white mt-0 mb-m typo--h1__widescreen">
						Our Experience at the TOKEN2049 Event of the Asia Crypto Week 2022 In Singapore
					</h2>
					<div class="is-flex align-items--center color--white justify-content--center__tablet typo--body typo--medium typo--body-big__widescreen">
						<span>by Ronnie Levi</span> <span class="mx-2xs color--gray typo--h1">·</span> <span>February 13, 2023</span>
					</div>

				</div>
			</div>
		</div>

		<!-- Content -->
		<section class="blog-post-content">
			<div class="container">

				<!-- 
				# Layout
				
				## Three main blocks:
					1. 3-cards of another posts of the same category
					2. post-navigation menu which holds links to 
					particular topics of current post. 
					(Use some js lib recomended by Nic).
					3. Post content

				## Layout:
					- [x] mobile: all three in one column in order as they are in list above
					- [x] tablet: 3-cards goes to own column to the right and become sticky 
						sliding on the side while page is scrolled down.
					- [x] desktop: post-navigation moves to own columns on the left side
						and becomes sticky.

				## Steps:
					1. [x] create layout without content. Three blocks with diff colors.
					2. [x] add responsiveness layout
					3. [ ] add sticky to side blocks
						- add js that will set topOffset = block.top.pos - header.bottom.pos 
							while topOffset < header.height
							do it on scroll
					4. [ ] set blocks with
				 -->

				<div class="blog-post-content__inner">
					<!-- 3-cards -->
					<div class="blog-post-content__3-cards">3-cards</div>
					<!-- post-navigation -->
					<div class="blog-post-content__post-navigation">post-navigation</div>
					<!-- content -->
					<div class="blog-post-content__content">content</div>
				</div>
			</div>
		</section>
	</div>
</main> <!-- #primary -->
<?php
// get_sidebar();
get_footer();
