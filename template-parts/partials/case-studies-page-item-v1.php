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
<div class="case-studies-page-item-v1 p-m bg-color--white is-rounded--4xs py-xl__tablet px-4xl__tablet py-4xl__desktop p-l__widescreen p-4xl__fullhd">
	<!-- ItemTop -->
	<div class="is-flex-tablet flex-wrap--wrap__tablet justify-content--center__tablet">
		<!-- CaseLogo -->
		<img src="<?php echo $case_logo_url ?>" alt="<?php echo $case_title ?>" class="case-studies-page-item-v1__case-logo mb-xs mb-0__tablet order--1__tablet w-50__tablet pr-l__tablet align-self--center__tablet ml-auto__desktop">
		<!-- CaseDescription -->
		<p class="case-studies-page-item-v1__description has-text-centered typo--body-big mt-0 mb-xl mt-m__tablet mb-l__tablet order--3__tablet w-100__tablet typo--unbounded__widescreen typo--h3__widescreen typo--light__widescreen mx-auto__widescreen">
			<?php echo $case_description ?>
		</p>
		<!-- StatsNumbers -->
		<div class="case-studies-page-item-v1__stats is-flex justify-content--center justify-content--flex-start__tablet mb-m order--2__tablet pl-l__tablet mb-0__tablet mt-0__tablet mr-auto__desktop">
			<div class="pr-xs">
				<!-- StatName -->
				<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
					<?php echo $case_stat_1_name ?>
				</span>
				<!-- StatValue -->
				<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase">
					<?php echo $case_stat_1_value ?>
				</span>
			</div>
			<div class="pl-xs">
				<!-- StatName -->
				<span class="is-block has-text-centered color--gray typo--body typo--medium mb-3xs">
					<?php echo $case_stat_2_name ?>
				</span>
				<!-- StatValue -->
				<span class="is-block has-text-centered typo--h1 typo--light typo--unbounded is-uppercase">
					<?php echo $case_stat_2_value ?>
				</span>
			</div>
		</div>
	</div>
	<!-- Spacer -->
	<div class="case-studies-page-item-v1__spacer is-hidden-mobile"></div>
	<!-- MediaCards -->
	<div class="case-studies-page-item-v1__media-cards mt-l__tablet">
		<div class="columns is-mobile is-multiline is-variable is-2 py-4 is-5-tablet py-3xs__tablet">
			<div class="column py-2 is-half-mobile is-half-tablet is-one-quarter-widescreen py-2xs__tablet">
				<!-- MediaCard -->
				<a href="<?php echo $case_media_1_url; ?>" target="_blank" class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
					<!-- MediaLogo -->
					<img src="<?php echo $case_media_1_logo; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
					<!-- Screenshot -->
					<img src="<?php echo $case_media_1_screenshot; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-screenshot is-rounded--5xs">
				</a>
			</div>
			<div class="column py-2 is-half-mobile is-half-tablet is-one-quarter-widescreen py-2xs__tablet">
				<!-- MediaCard -->
				<a href="<?php echo $case_media_1_url; ?>" target="_blank" class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
					<!-- MediaLogo -->
					<img src="<?php echo $case_media_1_logo; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
					<!-- Screenshot -->
					<img src="<?php echo $case_media_1_screenshot; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-screenshot is-rounded--5xs">
				</a>
			</div>
			<div class="column py-2 is-half-mobile is-half-tablet is-one-quarter-widescreen py-2xs__tablet">
				<!-- MediaCard -->
				<a href="<?php echo $case_media_1_url; ?>" target="_blank" class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
					<!-- MediaLogo -->
					<img src="<?php echo $case_media_1_logo; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
					<!-- Screenshot -->
					<img src="<?php echo $case_media_1_screenshot; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-screenshot is-rounded--5xs">
				</a>
			</div>
			<div class="column py-2 is-half-mobile is-half-tablet is-one-quarter-widescreen py-2xs__tablet">
				<!-- MediaCard -->
				<a href="<?php echo $case_media_1_url; ?>" target="_blank" class="is-block bg-color--gray-light is-rounded--4xs p-4xs pt-3xs p-3xs__tablet pt-xs__tablet">
					<!-- MediaLogo -->
					<img src="<?php echo $case_media_1_logo; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-logo mb-3xs mb-xs__tablet is-block mx-auto">
					<!-- Screenshot -->
					<img src="<?php echo $case_media_1_screenshot; ?>" alt="<?php echo $case_media_1_name; ?>" class="case-studies-page-item-v1__media-screenshot is-rounded--5xs">
				</a>
			</div>
		</div>
	</div>
</div>