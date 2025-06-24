<?php
/**
 * The template file for About page
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

	<div id="about-page" class="about-page">

		<!-- Hero - Section -->
		<div class="page-hero-wrapper bg-color--gradient-2">
			<div class="about-page-hero color--white pt-4xl pb-l pt-5xl__tablet py-2xl__desktop pt-l__widescreen pb-6xl__widescreen pt-2xl__fullhd">
				<div class="container">

					<!-- Columns -->
					<div class="about-page-hero__columns">

						<!-- Head Column -->
						<div class="about-page-hero__head-column">

							<!-- Heading -->
							<h2 class="about-page-hero__heading typo--h3 typo--light typo--unbounded mt-0 mb-2xs typo--h1__tablet mb-s__tablet typo--super-large__widescreen typo--regular__widescreen">
								We are MarketAcross, and we’ve got you covered
							</h2>

							<!-- Intro -->
							<p class="about-page-hero__intro typo--body typo--medium mt-0 mb-l typo--body-big__tablet typo--regular__tablet mb-0__desktop">
								MarketAcross is the blockchain industry’s leading PR agency. It’s a big statement to make, we know; but we stand firmly behind it.
							</p>
						</div>

						<!-- Stats Column -->
						<div class="about-page-hero__stats-column">

							<!-- Stats -->
							<div class="about-page-hero__stats">

								<!-- Item -->
								<div class="about-page-hero__stats-item py-3xs px-xs p-m__desktop">
									<!-- Value -->
									<span class="typo--h3 typo--light typo--unbounded is-uppercase typo--h1__tablet">105K+</span>
									<!-- Caption -->
									<span class="typo--body typo--medium">Published articles</span>
								</div>
								<!-- Item 2-->
								<div class="about-page-hero__stats-item about-page-hero__stats-item--mid py-3xs px-xs p-m__desktop">
									<!-- Value -->
									<span class="typo--h3 typo--light typo--unbounded is-uppercase typo--h1__tablet">38K+</span>
									<!-- Caption -->
									<span class="typo--body typo--medium">Website relationships</span>
								</div>
								<!-- Item 3-->
								<div class="about-page-hero__stats-item about-page-hero__stats-item--last py-3xs px-xs p-m__desktop">
									<!-- Value -->
									<span class="typo--h3 typo--light typo--unbounded is-uppercase typo--h1__tablet">12K+</span>
									<!-- Caption -->
									<span class="typo--body typo--medium">Contacts</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Who We Are - Section -->
		<section class="who-we-are bg-color--light-purple py-xl py-2xl__tablet py-4xl__desktop py-5xl__widescreen">
			<div class="container">

				<!-- Heading -->
				<h2 class="is-uppercase typo--tag-small typo--regular color--purple mt-0 mb-3xs typo--tag-big__tablet mb-xs__tablet">
					[&nbsp;&nbsp;Who we are&nbsp;&nbsp;]
				</h2>
				<!-- Subheading -->
				<p class="typo--tag-big typo--unbounded typo--regular is-uppercase mt-0 mb-xs typ typo--h3__tablet typo--light__tablet">
					The MarketAcross Story
				</p>

				<!-- Body -->
				<div class="who-we-are__body mb-m">

					<!-- Image -->
					<img width="343" height="332" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-1.webp" alt="MarketAcross Team" class="who-we-are__image who-we-are__image--1 is-block mb-3xs mb-0__tablet">

					<!-- Card -->
					<p class="who-we-are__card who-we-are__card--1 mt-0 mb-m p-xs pb-6xl is-rounded--4xs typo--body typo--regular p-m__tablet mb-0__tablet typo--body-big__widescreen">
						Since we started in 2012 we never took our foot off the gas and don’t plan to anytime soon. In this game you are only as good as your last campaign and we treat every client like it’s our first one, giving it all we have.
						<br>
						<br>
						We are proud to say we are crypto-native. We didn’t pivot into this because of the hype, we’ve been here all along. We didn’t study the industry, we lived it, one bull at a time.
					</p>

					<!-- Image -->
					<img width="343" height="278" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-2.webp" alt="MarketAcross Team At Work" class="who-we-are__image who-we-are__image--2 is-block mb-3xs mb-0__tablet">

					<!-- Card -->
					<p class="who-we-are__card who-we-are__card--2 mt-0 mb-0 p-xs pb-6xl is-rounded--4xs typo--body typo--regular p-m__tablet typo--body-big__widescreen">
						Having worked with more than 300 companies, from fresh startups to industry OGs, our accumulated knowledge, experience and media connections are applied to every client we partner with, resulting in impactful results. And yes - we are all about results; this is how we evaluate our own work, this is how we charge you - for results.
					</p>
				</div>

				<!-- Gallery -->
				<div class="swiper who-we-are-gallery-swiper">
					<div class="swiper-wrapper who-we-are__gallery">

						<!-- Item -->
						<img width="588" height="420" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-3.webp" alt="The Dog" class="swiper-slide who-we-are__gallery-item">

						<!-- Item -->
						<img width="588" height="420" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-4.webp" alt="The Dog And Team" class="swiper-slide who-we-are__gallery-item">

						<!-- Item -->
						<img width="588" height="420" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-5.webp" alt="The Team" class="swiper-slide who-we-are__gallery-item">

						<!-- Double slides count for propper swiper work -->
						<!-- Item -->
						<img width="588" height="420" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-3.webp" alt="The Dog" class="swiper-slide who-we-are__gallery-item">

						<!-- Item -->
						<img width="588" height="420" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-4.webp" alt="The Dog And Team" class="swiper-slide who-we-are__gallery-item">

						<!-- Item -->
						<img width="588" height="420" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/who-we-are-5.webp" alt="The Team" class="swiper-slide who-we-are__gallery-item">
					</div>
				</div>
			</div>
		</section>

		<!-- The Team - Section -->
		<?php get_template_part( 'template-parts/sections/the-team' ) ?>
	</div>
</main> <!-- #primary -->
<?php
// get_sidebar();
get_footer();
