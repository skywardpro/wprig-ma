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
				<a class="is-flex align-items--center p-2xs is-rounded--full bg-color--white-60" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_page_link() ?>" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-facebook"></use>
					</svg>
					<span class="visuallyhidden">Facebook</span>
				</a>
			</li>
			<li class="mr-2xs mr-xs__tablet">
				<a class="is-flex align-items--center p-2xs is-rounded--full bg-color--white-60" href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode( get_the_title() ); ?>&url=<?php echo rawurlencode( get_page_link() ); ?>" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-twitter-x"></use>
					</svg>
					<span class="visuallyhidden">Twitter-X</span>
				</a>
			</li>
			<li class="mr-2xs mr-xs__tablet">
				<a class="is-flex align-items--center p-2xs is-rounded--full bg-color--white-60" href="https://linkedin.com/sharing/share-offsite/?url=<?php echo get_page_link() ?>" target="_blank">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-linkedin"></use>
					</svg>
					<span class="visuallyhidden">Linkedin</span>
				</a>
			</li>
			<li class="">
				<button id="copy-address-to-clipboard-btn" class="reset-button-styles is-flex align-items--center p-2xs is-rounded--full bg-color--white-60">
					<svg aria-hidden="true" width="20" height="20" class="color--gray">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-link"></use>
					</svg>
					<span class="visuallyhidden"><?php echo get_the_title() ?></span>
				</button>
			</li>
		</ul>
		<!-- Copied To Clipboard Message -->
		<div id="copy-address-to-clipboard-msg" class="typo--body typo--medium color--gray mt-m" style="opacity: 0; height: 0;">Link copied to clipboard</div>
	</div>
</section>