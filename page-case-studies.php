<?php
/**
 * The Case Studies archive page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<main id="primary" class="site-main">

	<div id="case-studies-page" class="bg-color--gradient">

		<!-- Hero -->
		<div class="page-hero-wrapper">
			<section class="case-studies-page-hero py-4xl color--white py-5xl__widescreen">
				<div class="container">
					<!-- ContentWrapper -->
					<div class="case-studies-page-hero__content-wrapper">

						<!-- Heading -->
						<h1 class="typo--unbounded typo--h1 typo--light is-uppercase mb-m mb-l__widescreen">
							Case Studies
						</h1>
						<!-- BodyText -->
						<p class="typo--body-big">
							We've worked with some of the leading companies in the blockchain space, providing strategic support across PR, content marketing, and thought leadership to help them grow visibility, credibility, and impact in a fast-evolving industry. The following case studies highlight the scope and success of our work with these clients
						</p>
					</div>
				</div>
			</section>
		</div>

		<!-- PostCardsGrid -->
		<section class="">
			<div class="container">
				<!-- Cards -->
				<div class="columns is-multiline">
					<?php
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
                    <!-- Card 1 -->
					<!-- FirstTypeItem -->
					<div class="column is-full">
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
					</div>

                    <!-- Card 2 -->
					<!-- SecondTypeItem -->
					<div class="column is-full">
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
					</div>

                    <!-- Card 3 -->
					<!-- ThirdTypeItem -->
					<div class="column is-half-desktop">
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
					</div>

                    <!-- Card 4 -->
					<!-- ThirdTypeItem -->
					<div class="column is-half-desktop">
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
					</div>
                    
                    <!-- Card 5 -->
                    <!-- ForthTypeItem -->
					<div class="column is-full">
						<div class="case-studies-page-item-v4 p-m bg-color--white is-rounded--4xs py-xl__tablet px-4xl__tablet py-4xl__desktop p-l__widescreen p-4xl__fullhd">
							<div class="columns is-multiline pt-xs is-variable is-6-widescreen pb-xs__widescreen">
								<div class="column py-0 order--1__tablet is-full-tablet order--2__widescreen is-half-widescreen">
									<!-- CaseLogo -->
									<img src="<?php echo $case_logo_url ?>" alt="<?php echo $case_title ?>" class="case-studies-page-item-v4__case-logo mb-xs mb-0__tablet order--1__tablet pr-l__tablet">
								</div>
								<div class="column py-0 order--3__tablet is-full-tablet order--2__widescreen is-half-widescreen">
									<!-- CaseDescription -->
									<p class="case-studies-page-item-v4__description has-text-centered has-text-left-tablet typo--body-big mt-0 mb-xl mt-m__tablet mb-l__tablet order--3__tablet w-100__tablet typo--unbounded__widescreen typo--h3__widescreen typo--light__widescreen my-0__widescreen">
										<?php echo $case_description ?>
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
								<div class="column py-0 order--2__tablet is-full-tablet order--3__widescreen is-half-widescreen align-self--flex-start__widescreen">
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
					</div>
				</div>
			</div>
		</section>
	</div>
</main>
<?php
get_footer();
