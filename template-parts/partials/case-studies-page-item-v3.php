<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<div class="case-studies-page-item-v3 p-m bg-color--white is-rounded--4xs is-relative py-2xl__tablet px-4xl__tablet p-4xl__desktop p-l__widescreen p-4xl__fullhd">
	<!-- Link -->
	<a href="<?php echo get_permalink( get_the_ID() ) ?>" class="link--full-parent"><span class="visuallyhidden"><?php echo get_the_title() ?></span></a>

	<div class="columns is-multiline my-0 is-variable is-6-widescreen">
		<div class="column py-0 is-full-tablet">
			<!-- CaseLogo -->
			<img width="224" height="48" src="<?php echo get_field( 'company_logo', get_the_ID() )['url'] ?>" alt="<?php echo get_field( 'company_name', get_the_ID() ) ?>" class="case-studies-page-item-v3__case-logo mb-xs pr-l__tablet mb-m__tablet">
		</div>
		<div class="column py-0 is-full-tablet">
			<!-- CaseDescription -->
			<p class="case-studies-page-item-v3__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-2xl w-100__tablet">
				<?php echo get_field( 'featured_text', get_the_ID() ) ?>
				<!-- Garantees elemnt height equals two lines -->
				<br>
				<br>
			</p>
		</div>
		<div class="column py-0 is-full-tablet">
			<!-- StatsNumbers -->
			<div class="case-studies-page-item-v3__stats is-flex justify-content--center align-items--flex-end justify-content--flex-start__tablet mr-auto__desktop">
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
						<?php echo get_field( 'online_readership', get_the_ID() ) ?>
					</span>
				</div>
			</div>
		</div>
	</div>
</div>