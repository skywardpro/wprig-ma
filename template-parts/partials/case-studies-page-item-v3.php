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
<div class="case-studies-page-item-v3 p-m bg-color--white is-rounded--4xs py-xl__tablet px-4xl__tablet py-4xl__desktop p-l__widescreen p-4xl__fullhd">
	<div class="columns is-multiline pt-xs is-variable is-6-widescreen pb-xs__widescreen">
		<div class="column py-0 is-full-tablet">
			<!-- CaseLogo -->
			<img src="<?php echo $case_logo_url ?>" alt="<?php echo $case_title ?>" class="case-studies-page-item-v3__case-logo mb-xs mb-0__tablet pr-l__tablet">
		</div>
		<div class="column py-0 is-full-tablet">
			<!-- CaseDescription -->
			<p class="case-studies-page-item-v3__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-xl mt-m__tablet mb-l__tablet w-100__tablet">
				<?php echo $case_description ?>
			</p>
		</div>
		<div class="column py-0 is-full-tablet">
			<!-- StatsNumbers -->
			<div class="case-studies-page-item-v3__stats is-flex justify-content--center justify-content--flex-start__tablet mb-m my-0__tablet mr-auto__desktop">
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
	</div>
</div>