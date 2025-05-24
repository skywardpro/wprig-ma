<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="case-studies-page-item-v3 p-m bg-color--white is-rounded--4xs py-xl__tablet px-4xl__tablet py-4xl__desktop p-l__widescreen p-4xl__fullhd is-relative">
	<!-- Link -->
	<a href="<?php echo get_permalink( get_the_ID() ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>
	
	<div class="columns is-multiline pt-xs is-variable is-6-widescreen pb-xs__widescreen">
		<div class="column py-0 is-full-tablet">
			<!-- CaseLogo -->
			<img width="224" height="48" src="<?php echo get_field( 'company_logo', get_the_ID() )['url'] ?>" alt="<?php echo get_field( 'company_name', get_the_ID() ) ?>" class="case-studies-page-item-v3__case-logo mb-xs mb-0__tablet pr-l__tablet">
		</div>
		<div class="column py-0 is-full-tablet">
			<!-- CaseDescription -->
			<p class="case-studies-page-item-v3__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-xl mt-m__tablet mb-l__tablet w-100__tablet">
				<?php echo get_field( 'featured_text', get_the_ID() ) ?>
			</p>
		</div>
		<div class="column py-0 is-full-tablet">
			<!-- StatsNumbers -->
			<div class="case-studies-page-item-v3__stats is-flex justify-content--center justify-content--flex-start__tablet mb-m my-0__tablet mr-auto__desktop">
				<div class="pr-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
						Published Articles
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase">
						<?php echo get_field( 'published_articles', get_the_ID() ) ?>
					</span>
				</div>
				<div class="pl-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
						Online readership
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase">
						<?php echo get_field( 'online_readership', get_the_ID() ) ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>