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
								MarketAcross is the blockchain industry’s leading PR agency. It’s a big statement to make, we know;  but we stand firmly behind it.
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
	</div>
</main> <!-- #primary -->
<?php
// get_sidebar();
get_footer();
