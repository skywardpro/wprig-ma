<?php

/**
 * Template part for displaying Our Partners Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$partners = marketacross_get_partners();
?>
<section id="our-partners" class="our-partners mb-6xl mb-5xl__desktop">
	<div class="container">
		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-xl">
			[&nbsp;&nbsp;OUR PARTNERS&nbsp;&nbsp;]
		</h2>

		<!-- Cards -->
		<div class="our-partners-cards">
			<!-- Grid -->
			<div class="our-partners-cards__grid mb-xs">
				<?php
				foreach ( $partners as $index => $item ) {
					?>
					<!-- Item 1 -->
					<div class="our-partners-cards__item is-flex align-items--center justify-content--center bg-color--white is-rounded--4xs p-xs <?php echo $index > 9 ? 'is-hidden-mobile' : ''; ?>">
						<img width="96" height="18" src="<?php echo $item['logo']['url'] ?>" alt="<?php echo $item['title'] ?>" class="our-partners-cards__item-image" />
					</div>
					<?php
				}
				?>
			</div>

			<!-- Show More -->
			<?php
			if ( count( $partners ) > 10 ) {
				?>
				<div class="is-flex justify-content--center is-hidden-tablet">
					<button class="reset-button-styles our-partners-cards__show-more typo--body typo--medium color--gray">Show More</button>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>