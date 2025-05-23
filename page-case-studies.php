<?php
/**
 * The Case Studies archive page template file
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

	<div id="case-studies-page" class="bg-color--gradient">

		<!-- Hero -->
		<div class="page-hero-wrapper">
			<section class="case-studies-page-hero py-4xl color--white py-5xl__widescreen">
				<div class="container">
					<!-- ContentWrapper -->
					<div class="case-studies-page-hero__content-wrapper">

						<!-- Heading -->
						<h1 class="typo--unbounded typo--h1 typo--light is-uppercase mb-m mb-l__widescreen">
							Case Studies
						</h1>
						<!-- BodyText -->
						<p class="typo--body-big">
							We've worked with some of the leading companies in the blockchain space, providing strategic support across PR, content marketing, and thought leadership to help them grow visibility, credibility, and impact in a fast-evolving industry. The following case studies highlight the scope and success of our work with these clients
						</p>
					</div>
				</div>
			</section>
		</div>

		<!-- PostCardsGrid -->
		<section class="pb-6xl">
			<div class="container">
				<!-- Cards -->
				<div class="columns is-multiline">
					<?php
					$case_logo_url = get_stylesheet_directory_uri() . '/assets/images/newsroom-forbes-logo.png';
					$case_title = 'Fobes';
					$case_description = 'Avalance is one of the fastest growing ecosystems in web3, and they had a challenge of streamlining comms and marketing around the different growth initiatives and new JVs. How do we turn single partnerships announcements to long term needle moving support.';
					$case_stat_1_name = 'Published Articles';
					$case_stat_1_value = '167';
					$case_stat_2_name = 'Online readership';
					$case_stat_2_value = '3.12B';
					$case_media_1_logo = get_stylesheet_directory_uri() . '/assets/images/newsroom-forbes-logo.png';
					$case_media_1_name = 'Medium.com';
					$case_media_1_screenshot = get_stylesheet_directory_uri() . '/assets/images/case-media-screen.png';
					$case_media_1_url = '#';
					?>
					<!-- Card 1 -->
					<!-- FirstTypeItem -->
					 <div class="column is-full">
						 <?php get_template_part( 'template-parts/partials/case-studies-page-item-v1' ) ?>
					 </div>

					<!-- Card 2 -->
					<!-- SecondTypeItem -->
					 <div class="column is-full">
						 <?php get_template_part( 'template-parts/partials/case-studies-page-item-v2' ) ?>
					 </div>

					<!-- Card 3 -->
					<!-- ThirdTypeItem -->
					 <div class="column is-half-desktop">
						 <?php get_template_part( 'template-parts/partials/case-studies-page-item-v3' ) ?>
					 </div>
					
					<!-- Card 4 -->
					<!-- ThirdTypeItem -->
					 <div class="column is-half-desktop">
						 <?php get_template_part( 'template-parts/partials/case-studies-page-item-v3' ) ?>
					 </div>
					
					<!-- Card 5 -->
					<!-- ForthTypeItem -->
					 <div class="column is-full">
						 <?php get_template_part( 'template-parts/partials/case-studies-page-item-v4' ) ?>
					 </div>
				</div>
			</div>
		</section>
	</div>
</main>
<?php
get_footer();
