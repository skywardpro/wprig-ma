<?php

/**
 * Template part for displaying Share This Case Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="share-this-case" class="share-this-case pt-2xl pb-6xl">
	<div class="container">

		<!-- Heading -->
		<h2 class="color--gray typo--body typo--regular mt-0 mb-2xs typo--body-big__desktop">
			Share this case
		</h2>

		<!-- Socials -->
		<ul class="is-flex align-items--center pl-0 mb-0 is-list--none">
			<li class="mr-2xs mr-xs__tablet">
				<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-60" href="https://www.instagram.com/marketacrosspr/?hl=en" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-instagram"></use>
					</svg>
					<span class="visuallyhidden">Instagram</span>
				</a>
			</li>
			<li class="mr-2xs mr-xs__tablet">
				<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-60" href="https://www.facebook.com/MarketAcross.IL/" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-facebook"></use>
					</svg>
					<span class="visuallyhidden">Facebook</span>
				</a>
			</li>
			<li class="mr-2xs mr-xs__tablet">
				<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-60" href="https://twitter.com/MarketAcross" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-twitter-x"></use>
					</svg>
					<span class="visuallyhidden">Twitter-X</span>
				</a>
			</li>
			<li class="mr-2xs mr-xs__tablet">
				<a class="is-flex align-items--center p-4 is-rounded--full bg-color--white-60" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo get_page_link() ?>" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-linkedin"></use>
					</svg>
					<span class="visuallyhidden">Linkedin</span>
				</a>
			</li>
			<li class="">
				<button class="reset-button-styles is-flex align-items--center p-4 is-rounded--full bg-color--white-60">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-link"></use>
					</svg>
					<span class="visuallyhidden"><?php echo get_the_title() ?></span>
				</button>
			</li>
		</ul>
	</div>
</section>