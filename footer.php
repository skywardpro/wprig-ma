<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<footer class="site-footer bg-color--gradient">
	<div class="container">

		<!-- Footer Top -->
		<div class="site-footer__top">
			<!-- Logo -->
			<a href="<?php echo get_site_url(); ?>" rel="home" aria-current="page" class="is-inline-block">
				<img width="71" height="30" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-white.svg" alt="World's Leading Blockchain PR & Marketing Firm">
			</a>
			<div class="columns is-gapless mt-xl mt-3xl__desktop mt-4xl__fullhd">
				<!-- Find Us Column -->
				<div class="column order--2__tablet">
					<!-- Find Us Socials -->
					<h3 class="typo--tag-small typo--regular typo--unbounded color--purple mt-0 typo--tag-big__tablet">
						[ find us ]
					</h3>
					<ul class="is-flex align-items--center pl-0 mb-0 mt-m is-list--none">
						<li class="mr-2xs mr-xs__tablet">
							<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-10" href="https://twitter.com/MarketAcross" target="_blank">
								<svg aria-hidden="true" width="20" height="20">
									<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-twitter-x"></use>
								</svg>
								<span class="visuallyhidden">Twitter-X</span>
							</a>
						</li>
						<li class="mr-2xs mr-xs__tablet">
							<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-10" href="https://www.instagram.com/marketacrosspr/?hl=en" target="_blank">
								<svg aria-hidden="true" width="20" height="20">
									<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-instagram"></use>
								</svg>
								<span class="visuallyhidden">Instagram</span>
							</a>
						</li>
						<li class="mr-2xs mr-xs__tablet">
							<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-10" href="https://www.facebook.com/MarketAcross.IL/" target="_blank">
								<svg aria-hidden="true" width="20" height="20">
									<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-facebook"></use>
								</svg>
								<span class="visuallyhidden">Facebook</span>
							</a>
						</li>
						<li class="">
							<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-10" href="https://www.linkedin.com/company/marketacross/?viewAsMember=true" target="_blank">
								<svg aria-hidden="true" width="20" height="20">
									<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-linkedin"></use>
								</svg>
								<span class="visuallyhidden">Linkedin</span>
							</a>
						</li>
					</ul>
					<!-- Awards -->
					<div class="is-flex is-hidden-mobile mt-l is-hidden-desktop">
						<a href="https://clutch.co/profile/marketacross" class="mr-2xs">
							<img width="49" height="53" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clutch-1.svg" alt="Clutch Award" />
						</a>
						<a href="https://clutch.co/profile/marketacross" class="mr-2xs">
							<img width="49" height="53" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clutch-2.svg" alt="Clutch Award" />
						</a>
						<a href="https://clutch.co/profile/marketacross" class="">
							<img width="49" height="53" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clutch-3.svg" alt="Clutch Award" />
						</a>
					</div>
				</div>
				<!-- Menu Column -->
				<div class="column mt-xl mt-0__tablet order--1__tablet">
					<!-- Menu Links -->
					<h3 class="typo--tag-small typo--regular typo--unbounded color--purple mt-0 mb-m typo--tag-big__tablet">
						[ menu ]
					</h3>
					<nav class="columns is-gapless is-mobile">
						<div class="column is-half">
							<div class="is-flex flex-direction--column align-items--start pr-xs">
								<a href="#" class="typo--body color--white typo--medium mb-xs mb-m__tablet">Services</a>
								<a href="#" class="typo--body color--white typo--medium mb-xs mb-m__tablet">Case Studies</a>
								<a href="#" class="typo--body color--white typo--medium mb-xs mb-m__tablet">Crypto Events</a>
								<a href="#" class="typo--body color--white typo--medium">Blog Across</a>
							</div>
						</div>
						<div class="column is-half mt-auto mt-0__tablet">
							<div class="is-flex flex-direction--column align-items--start">
								<a href="#" class="typo--body color--white typo--medium mb-xs mb-m__tablet">Company</a>
								<a href="#" class="typo--body color--white typo--medium mb-xs mb-m__tablet">Contact us</a>
								<a href="#" class="typo--body color--white typo--medium">Media Kit</a>
							</div>
						</div>
					</nav>
				</div>
				<!-- Awards Column (Mobile Only) -->
				<div class="column mt-xl is-hidden-tablet-only order--3__desktop mt-0__desktop">
					<!-- Awards -->
					<div class="is-flex justify-content--right__desktop">
						<a href="https://clutch.co/profile/marketacross" class="mr-2xs">
							<img width="49" height="53" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clutch-1.svg" alt="Clutch Award"  class="clutch-award"/>
						</a>
						<a href="https://clutch.co/profile/marketacross" class="mr-2xs">
							<img width="49" height="53" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clutch-2.svg" alt="Clutch Award"  class="clutch-award"/>
						</a>
						<a href="https://clutch.co/profile/marketacross" class="">
							<img width="49" height="53" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/clutch-3.svg" alt="Clutch Award"  class="clutch-award"/>
						</a>
					</div>
				</div>
			</div>

			<!-- Bottom -->
			<div class="mt-m is-flex justify-content--space-between align-items--center mt-xl__tablet mt-3xl__desktop">
				<span class="typo--body typo--medium color--white-60">© MarketAcross 2024</span>
				<img width="50" height="16" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/osga.svg" alt="osga" />
			</div>
		</div>

		<!-- Footer CTA -->
		<div class="site-footer__cta">
			<!-- Heading -->
			<h2 class="typo--body typo--medium has-text-centered color--white-60 my-0 typo--body-big__desktop">
				World’s leading blockchain PR firm
			</h2>
			<!-- Subheading -->
			<p class="typo--h3 typo--light typo--unbounded color--white has-text-centered mt-s mb-0 mt-m__tablet typo--h1__desktop">
				WE GOT YOU
				<br class="is-hidden-tablet">COVERED
			</p>
			<!-- Button -->
			<div class="has-text-centered mt-l mt-m__tablet">
				<a href="#" class="btn--white-small is-hidden-desktop">Let’s talk</a>
				<a href="#" class="btn--white is-hidden-mobile is-hidden-tablet-only">Let’s talk</a>
			</div>
		</div>
	</div>
	<!-- Image -->
	<picture>
		<source media="(min-width: 1456px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer-bottom-fullhd.webp">
		<source media="(min-width: 1216px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer-bottom-widescreen.webp">
		<source media="(min-width: 1024px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer-bottom-desktop.webp">
		<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer-bottom-tablet.webp">
		<img width="375" height="181" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer-bottom-mobile.webp" alt="Market Across" class="site-footer__bottom-image mt">
	</picture>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>