<?php

/**
 * Template part for Case Studies archive page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

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
<div class="case-studies-page-item-v2 p-m bg-color--white is-rounded--4xs py-xl__tablet px-4xl__tablet py-4xl__desktop p-l__widescreen p-4xl__fullhd">
	<div class="columns is-multiline pt-xs is-variable is-6-widescreen pb-xs__widescreen">
		<div class="column py-0 order--1__tablet is-full-tablet order--2__widescreen is-half-widescreen">
			<!-- CaseLogo -->
			<img src="<?php echo $case_logo_url ?>" alt="<?php echo $case_title ?>" class="case-studies-page-item-v2__case-logo mb-xs mb-0__tablet order--1__tablet pr-l__tablet pr-0__widescreen ml-auto__widescreen">
		</div>
		<div class="column py-0 order--3__tablet is-full-tablet order--1__widescreen is-half-widescreen">
			<!-- CaseDescription -->
			<p class="case-studies-page-item-v2__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-xl mt-m__tablet mb-l__tablet order--3__tablet w-100__tablet typo--unbounded__widescreen typo--h3__widescreen typo--light__widescreen my-0__widescreen">
				<?php echo $case_description ?>
			</p>
			<!-- NegativePullUpper -->
			<div class="case-studies-page-item-v2__pullupper is-hidden-touch is-hidden-desktop-only"></div>
		</div>
		<div class="column py-0 order--4__tablet is-full-tablet order--3__widescreen is-half-widescreen align-self--flex-end__widescreen">
			<!-- StatsNumbers -->
			<div class="case-studies-page-item-v2__stats is-flex justify-content--center justify-content--flex-start__tablet mb-m order--2__tabletmb-0__tablet my-0__tablet mr-auto__desktop">
				<div class="pr-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
						<?php echo $case_stat_1_name ?>
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1__widescreen">
						<?php echo $case_stat_1_value ?>
					</span>
				</div>
				<div class="pl-xs">
					<!-- StatName -->
					<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
						<?php echo $case_stat_2_name ?>
					</span>
					<!-- StatValue -->
					<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase line-height--1__widescreen">
						<?php echo $case_stat_2_value ?>
					</span>
				</div>
			</div>
		</div>
		<div class="column py-0 order--2__tablet is-full-tablet order--4__widescreen is-half-widescreen align-self--flex-start__widescreen">
			<!-- MediaCards -->
			<div class="case-studies-page-item-v2__media-cards mt-l__tablet mb-m__tablet my-0__widescreen">
				<div class="columns is-mobile is-multiline is-variable is-2 py-4">
					<div class="column py-2 is-half-mobile is-half-tablet">
						<!-- MediaCard -->
						<a href="<?php echo $case_media_1_url; ?>" target="_blank" class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
							<!-- MediaLogo -->
							<img src="<?php echo $case_media_1_logo; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v2__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
							<!-- Screenshot -->
							<img src="<?php echo $case_media_1_screenshot; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v2__media-screenshot is-rounded--5xs">
						</a>
					</div>
					<div class="column py-2 is-half-mobile is-half-tablet">
						<!-- MediaCard -->
						<a href="<?php echo $case_media_1_url; ?>" target="_blank" class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
							<!-- MediaLogo -->
							<img src="<?php echo $case_media_1_logo; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v2__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
							<!-- Screenshot -->
							<img src="<?php echo $case_media_1_screenshot; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v2__media-screenshot is-rounded--5xs">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>