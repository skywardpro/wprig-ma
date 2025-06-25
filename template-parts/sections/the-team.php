<?php

/**
 * Template part for displaying The Services Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="the-team" class="the-team bg-color--light-purple py-xl py-2xl__tablet py-4xl__desktop py-5xl__widescreen">
	<?php
	if ( have_rows( 'marketacross_the_team', 'options' ) ) {
		?>
		<script id="the-team-json" type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "Organization",
				"name": "MarketAcross",
				"employees": [
					<?php
					$rowsCount = count( get_field( 'marketacross_the_team', 'options' ) );
					while ( have_rows( 'marketacross_the_team', 'options' ) ) {
						the_row();
						?>
                            {
                                "@type": "Person",
                                "category": "<?php echo get_sub_field( 'category' ) ?>",
                                "name": "<?php echo get_sub_field( 'name' ) ?>",
                                "jobTitle": "<?php echo get_sub_field('position') ?>",
                                "image": "<?php echo get_sub_field( 'avatar' )['url'] ?>",
                                "sameAs": "<?php echo get_sub_field('link') ?>"
                            }<?php echo get_row_index() < $rowsCount ? ',' : '' ?>
                            <?php
					}
					?>
				]
			}
			</script>
		<?php
	}
	?>
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--unbounded typo--h3 typo--light is-uppercase mt-0 mb-s mb-l__tablet typo--h1__widescreen">
			The Team
		</h2>

		<!-- Cards Container -->
		<div class="the-team__cards-container mb-2xl__tablet mb-3xl__desktop mb-4xl__widescreen"></div>

        <!-- Pets (mobile only) -->
		<div class="is-hidden-mobile" style="gap: 16px;">

            <!-- Headging -->
            <h3 class="typo--h3 typo--unbounded typo--light is-uppercase mt-0 mb-l typo--h1__widescreen">
                Special employees
            </h3>

            <div class="the-team__pets-container is-flex"></div>
        </div>

		<!-- Row Template -->
		<template id="the-team-row-template">
			<!-- Row -->
			<div class="the-team__row mb-s">

				<!-- Row Title -->
				<h3 class="typo--body typo--medium mb-2xs"></h3>

				<!-- Cards -->
				<div class="swiper the-team__row-cards">

					<div class="swiper-wrapper the-team__row-cards-wrapper">
					</div>
				</div>
			</div>
		</template>

		<!-- Person Card Template -->
		<template id="the-team-person-card-template">
			<!-- Card -->
			<div class="swiper-slide the-team__card is-flex flex-direction--column is-relative is-rounded--4xs">
				<!-- Link -->
				<a href="#" class="the-team__card-anchor link--full-parent"><span class="visuallyhidden the-team__card-anchor-text"></span></a>
				<!-- Image -->
				<img width="162" height="170" src="" alt="" class="the-team__card-image is-rounded--4xs">
				<!-- Card Body -->
				<div class="the-team__card-body p-3xs bg-color--white-30 is-flex flex-direction--column flex-grow--1">
					<!-- Name -->
					<span class="the-team__card-name typo--body-big typo--regular"></span>
					<!-- Position -->
					<span class="the-team__card-position typo--body-small color--gray"></span>
					<!-- Linked In Icon -->
					<div class="the-team__card-linkedin-icon ml-auto mt-auto"></div>
				</div>
			</div>
		</template>
	</div>
</section>