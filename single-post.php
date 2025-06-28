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
		<section class="blog-post-content pb-5xl pb-6xl__tablet pb-7xl__desktop">
			<div class="container">

				<div class="blog-post-content__inner">

					<!-- 3-cards -->
					<div class="blog-post-content__3-cards mb-xl">

						<!-- Items -->
						<div class="blog-post-content__3-cards-items mb-m">
							<!-- Card -->
							<div class="blog-post-content__3-cards-item is-flex is-relative">
								<!-- Link -->
								<a href="#" class="link--full-parent"><span class="visuallyhidden">title</span></a>
								<!-- Image -->
								<img width="72" height="72" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/random-pic.png" alt="title" class="blog-post-content__3-cards-item-image mr-3xs flex-shrink--0 mr-2xs__widescreen">
								<!-- Text -->
								<div class="">
									<h3 class="blog-post-content__3-cards-item-title typo--body typo--medium my-0 typo--body-big__widescreen">
										MarketAcross and Chainlink Labs Establish Channel Partnership To Support Chainlink BUILD Members
									</h3>
									<span class="typo--body-small typo--regular color--gray-dark typo--height-10 my-0 typo--body__widescreen">
										by Ronnie Levi
									</span>
								</div>
							</div>
							<!-- Card -->
							<div class="blog-post-content__3-cards-item is-flex is-relative">
								<!-- Link -->
								<a href="#" class="link--full-parent"><span class="visuallyhidden">title</span></a>
								<!-- Image -->
								<img width="72" height="72" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/random-pic.png" alt="title" class="blog-post-content__3-cards-item-image mr-3xs flex-shrink--0 mr-2xs__widescreen">
								<!-- Text -->
								<div class="">
									<h3 class="blog-post-content__3-cards-item-title typo--body typo--medium my-0 typo--body-big__widescreen">
										MarketAcross and Chainlink Labs Establish Channel Partnership To Support Chainlink BUILD Members
									</h3>
									<span class="typo--body-small typo--regular color--gray-dark typo--height-10 my-0 typo--body__widescreen">
										by Ronnie Levi
									</span>
								</div>
							</div>
							<!-- Card -->
							<div class="blog-post-content__3-cards-item is-flex is-relative">
								<!-- Link -->
								<a href="#" class="link--full-parent"><span class="visuallyhidden">title</span></a>
								<!-- Image -->
								<img width="72" height="72" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/random-pic.png" alt="title" class="blog-post-content__3-cards-item-image mr-3xs flex-shrink--0 mr-2xs__widescreen">
								<!-- Text -->
								<div class="">
									<h3 class="blog-post-content__3-cards-item-title typo--body typo--medium my-0 typo--body-big__widescreen">
										MarketAcross and Chainlink Labs Establish Channel Partnership To Support Chainlink BUILD Members
									</h3>
									<span class="typo--body-small typo--regular color--gray-dark typo--height-10 my-0 typo--body__widescreen">
										by Ronnie Levi
									</span>
								</div>
							</div>
						</div>

						<!-- Link -->
						<a href="#" class="link--arrow-right">
							See all Category 1
							<span class="icon"></span>
						</a>
					</div>

					<!-- post-navigation -->
					<div class="blog-post-content__post-navigation mb-m">
						<!-- Title -->
						<h3 class="typo--tag-small typo--regular typo--unbounded is-uppercase mt-0 mb-3xs typo--tag-big__desktop">
							content
						</h3>
						<!-- Menu -->
						<nav class="is-flex flex-direction--column">
							<a href="#" class="typo--body typo--regular color--purple py-3xs">
								A firsthand account of ETHTLV
							</a>
							<a href="#" class="typo--body typo--regular color--purple py-3xs">
								FCT tool designed traders
							</a>
							<a href="#" class="typo--body typo--regular color--purple py-3xs">
								It was an intimate
							</a>
							<a href="#" class="typo--body typo--regular color--purple py-3xs">
								My week started at the offices
							</a>
							<!-- Only first 4 are shown -->
							<a href="#" class="typo--body typo--regular color--purple py-3xs is-hidden-touch">
								I was hidden 1 =]
							</a>
							<a href="#" class="typo--body typo--regular color--purple py-3xs is-hidden-touch">
								I was hidden 2 =]
							</a>
							<a href="#" class="typo--body typo--regular color--purple py-3xs is-hidden-touch">
								I was hidden 3 =]
							</a>
						</nav>
						<!-- Show all -->
						<button class="blog-post-content__post-navigation-show-all reset-button-styles typo--body-small typo--regular color--purple w-100 has-text-left px-0 py-2xs is-hidden-desktop">
							All content
						</button>
					</div>

					<!-- content -->
					<div class="blog-post-content__content mb-m mb-l__tablet mb-xl__desktop mb-2xl__widescreen">
						<?php the_content() ?>
					</div>

					<!-- Share This Post -->
					<?php get_template_part( 'template-parts/components/share-this-page', null, array('heading' => 'Share this case', 'class' => 'blog-post-content__share-this-post')) ?>
				</div>
			</div>
		</section>

		<!-- Swiper -->
		<?php get_template_part('template-parts/sections/blog') ?>
	</div>
</main> <!-- #primary -->
<?php
// get_sidebar();
get_footer();
