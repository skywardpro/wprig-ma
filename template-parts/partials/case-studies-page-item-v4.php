<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="case-studies-page-item-v4 p-m bg-color--white is-rounded--4xs py-xl__tablet px-4xl__tablet py-4xl__desktop p-l__widescreen p-4xl__fullhd is-relative">
	<!-- Link -->
	<a href="<?php echo get_permalink( get_the_ID() ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>
	
	<div class="columns is-multiline pt-xs is-variable is-6-widescreen pb-xs__widescreen">
		<div class="column py-0 order--1__tablet is-full-tablet order--2__widescreen is-half-widescreen">
			<!-- CaseLogo -->
			<img width="224" height="48" src="<?php echo get_field( 'company_logo', get_the_ID() )['url'] ?>" alt="<?php echo get_field( 'company_name', get_the_ID() ) ?>" class="case-studies-page-item-v4__case-logo mb-xs mb-0__tablet order--1__tablet pr-l__tablet">
		</div>
		<div class="column py-0 order--3__tablet is-full-tablet order--2__widescreen is-half-widescreen">
			<!-- CaseDescription -->
			<p class="case-studies-page-item-v4__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-xl mt-m__tablet mb-l__tablet order--3__tablet w-100__tablet typo--unbounded__widescreen typo--h3__widescreen typo--light__widescreen my-0__widescreen">
				<?php echo get_field( 'featured_text', get_the_ID() ) ?>
			</p>
			<!-- NegativePullUpper -->
			<div class="case-studies-page-item-v4__pullupper is-hidden-touch is-hidden-desktop-only"></div>
		</div>
		<div class="column py-0 order--4__tablet is-full-tablet order--4__widescreen is-half-widescreen align-self--flex-end__widescreen">
			<!-- StatsNumbers -->
			<div class="case-studies-page-item-v4__stats is-flex justify-content--center justify-content--flex-start__tablet mb-m order--2__tabletmb-0__tablet my-0__tablet mr-auto__desktop">
				<div class="pr-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
						Published Articles
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1__widescreen">
						<?php echo get_field( 'published_articles', get_the_ID() ) ?>
					</span>
				</div>
				<div class="pl-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
						Online readership
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1__widescreen">
						<?php echo get_field( 'online_readership', get_the_ID() ) ?>
					</span>
				</div>
			</div>
		</div>
		<div class="column py-0 order--2__tablet is-full-tablet order--3__widescreen is-half-widescreen align-self--flex-start__widescreen">
			<!-- MediaCards -->
			<div class="case-studies-page-item-v2__media-cards mt-l__tablet mb-m__tablet my-0__widescreen">
				<div class="columns is-mobile is-multiline is-variable is-2 py-4">
					<?php
					if ( have_rows( 'repeater_media', get_the_ID() ) ) {
						$count = 0;
						while ( $count < 2 && have_rows( 'repeater_media', get_the_ID() ) ) {
							the_row();
							$count++;
							?>
							<div class="column py-2 is-half-mobile is-half-tablet">
								<!-- MediaCard -->
								<div class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
									<!-- MediaLogo -->
									<img width="160" height="40" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/case-studies-media-logo-<?php echo get_sub_field( 'media_source' )['value'] ?>.png" alt="<?php echo get_sub_field( 'media_source' )['label'] ?>" class="case-studies-page-item-v4__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
									<!-- Screenshot -->
									<img width="230" height="148" src="<?php echo get_sub_field( 'media_image' )['sizes']['thumbnail'] ?>" alt="<?php echo get_sub_field( 'media_name' ) ?>" class="w-100 h-100 is-image-cover is-rounded--5xs">
								</div>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>