<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="case-studies-page-item-v2 p-m bg-color--white is-rounded--4xs is-relative py-2xl__tablet px-4xl__tablet p-4xl__desktop p-l__widescreen p-4xl__fullhd">
	<!-- Link -->
	<a href="<?php echo get_permalink( get_the_ID() ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>

	<div class="columns is-multiline my-0 is-variable is-6-widescreen">
		<div class="column py-0 order--1__tablet is-full-tablet order--2__widescreen is-half-widescreen">
			<!-- CaseLogo -->
			<img width="224" height="48" src="<?php echo get_field( 'company_logo', get_the_ID() )['url'] ?>" alt="<?php echo get_field( 'company_name', get_the_ID() ) ?>" class="case-studies-page-item-v2__case-logo mb-xs mb-l__tablet pr-l__tablet pr-0__widescreen ml-auto__widescreen mb-3xl__widescreen">
		</div>
		<div class="column py-0 order--3__tablet is-full-tablet order--1__widescreen is-half-widescreen">
			<!-- CaseDescription -->
			<p class="case-studies-page-item-v2__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-xl order--3__tablet w-100__tablet mb-l__tablet typo--unbounded__widescreen typo--h3__widescreen typo--light__widescreen">
				<?php echo get_field( 'featured_text', get_the_ID() ) ?>
			</p>
			<!-- NegativePullUpper -->
			<div class="case-studies-page-item-v2__pullupper is-hidden-touch is-hidden-desktop-only"></div>
		</div>
		<div class="column py-0 order--4__tablet is-full-tablet order--3__widescreen is-half-widescreen align-self--flex-end__widescreen">
			<!-- StatsNumbers -->
			<div class="case-studies-page-item-v2__stats is-flex justify-content--center mb-m justify-content--flex-start__tablet order--2__tablet mb-0__tablet mr-auto__desktop">
				<div class="pr-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-2xs">
						Published Articles
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1">
						<?php echo get_field( 'published_articles', get_the_ID() ) ?>
					</span>
				</div>
				<div class="pl-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-2xs">
						Online readership
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1">
						<?php echo get_field( 'online_readership', get_the_ID() ); ?>
					</span>
				</div>
			</div>
		</div>
		<div class="column py-0 order--2__tablet is-full-tablet order--4__widescreen is-half-widescreen align-self--flex-start__widescreen">
			<!-- MediaCards -->
			<div class="case-studies-page-item-v2__media-cards mb-2xl__tablet mb-0__widescreen">
				<div class="columns is-mobile is-multiline">
					<?php
					if ( have_rows( 'repeater_media', get_the_ID() ) ) {
						$count = 0;
						while ( $count < 2 && have_rows( 'repeater_media', get_the_ID() ) ) {
							the_row();
							$count++;
							?>
							<div class="column is-half-mobile is-half-tablet">
								<!-- MediaCard -->
								<div class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
									<!-- MediaLogo -->
									<img width="160" height="40" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/case-studies-media-logo-<?php echo get_sub_field( 'media_source' )['value'] ?>.png" alt="<?php echo get_sub_field( 'media_source' )['label']; ?>" class="case-studies-page-item-v1__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
									<!-- Screenshot -->
									<img width="230" height="148" src="<?php echo get_sub_field( 'media_image' )['sizes']['thumbnail']; ?>" alt="<?php echo get_sub_field( 'media_name' ); ?>" class="case-studies-page-item-v1__media-screenshot is-rounded--5xs">
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