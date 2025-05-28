<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="case-studies-page-item-v1 p-m bg-color--white is-rounded--4xs is-relative py-2xl__tablet px-4xl__tablet p-4xl__desktop p-l__widescreen p-4xl__fullhd">
	<!-- Link -->
	<a href="<?php echo get_permalink(get_the_ID()) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>

	<!-- ItemTop -->
	<div class="is-flex-tablet flex-wrap--wrap__tablet justify-content--center__tablet">
		<!-- CaseLogo -->
		<img width="224" height="48" src="<?php echo get_field('company_logo', get_the_ID())['url'] ?>" alt="<?php echo get_field('company_name', get_the_ID()) ?>" class="mb-xs mb-0__tablet case-studies-page-item-v1__case-logo order--1__tablet w-50__tablet pr-l__tablet align-self--center__tablet ml-auto__desktop">
		<!-- CaseDescription -->
		<p class="mt-0 mb-xl mb-l__tablet case-studies-page-item-v1__description has-text-centered typo--body-big order--3__tablet w-100__tablet typo--unbounded__widescreen typo--h3__widescreen typo--light__widescreen">
			<?php echo get_field('featured_text', get_the_ID()) ?>
		</p>
		<!-- StatsNumbers -->
		<div class="mb-m case-studies-page-item-v1__stats is-flex justify-content--center align-items--flex-end justify-content--flex-start__tablet order--2__tablet pl-l__tablet mr-auto__desktop">
			<div class="pr-xs">
				<!-- StatName -->
				<span class="mb-2xs is-block has-text-centered color--gray typo--body typo--medium">
					Published Articles
				</span>
				<!-- StatValue -->
				<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1">
					<?php echo get_field('published_articles', get_the_ID()) ?>
				</span>
			</div>
			<div class="pl-xs">
				<!-- StatName -->
				<span class="mb-2xs is-block has-text-centered color--gray typo--body typo--medium">
					Online readership
				</span>
				<!-- StatValue -->
				<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1">
					<?php echo get_field('online_readership', get_the_ID()) ?>
				</span>
			</div>
		</div>
	</div>
	<!-- Spacer -->
	<div class="case-studies-page-item-v1__spacer is-hidden-mobile mb-l__tablet"></div>
	<!-- MediaCards -->
	<div class="case-studies-page-item-v1__media-cards mx-auto">
		<div class="columns is-mobile is-multiline">
			<?php
			if ( have_rows( 'repeater_media', get_the_ID() ) ) {
				$count = 0;
				while ( $count < 4 && have_rows( 'repeater_media', get_the_ID() ) ) {
					the_row();
					$count++;
					?>
					<div class="column is-half-mobile is-half-tablet is-one-quarter-widescreen">
						<!-- MediaCard -->
						<div class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
							<!-- MediaLogo -->
							<img width="160" height="40" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/case-studies-media-logo-<?php echo get_sub_field( 'media_source' )['value'] ?>.png" alt="<?php echo get_sub_field( 'media_source' )['label'] ?>" class="case-studies-page-item-v1__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
							<!-- Screenshot -->
							<img width="230" height="148" src="<?php echo get_sub_field( 'media_image' )['sizes']['thumbnail'] ?>" alt="<?php echo get_sub_field( 'media_name' ) ?>" class="case-studies-page-item-v1__media-screenshot is-rounded--5xs">
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</div>