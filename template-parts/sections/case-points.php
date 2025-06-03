<?php

/**
 * Template part for displaying Case Points Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="case-points" class="case-points py-2xl">
	<div class="container">
		<!-- Body -->
		<div class="bg-color--white-60 bg-backdrop--blur py-l px-xs px-l__desktop p-xl__widescreen p-3xl__fullhd">
			<!-- Part 1 -->
			<div class="case-points__columns columns py-m py-l__desktop py-2xl__widescreen py-3xl__fullhd">
				<div class="column mb-m mb-0__tablet is-flex-tablet align-items--center">
					<!-- Title -->
					<h3 class="typo--h3 typo--unbounded is-uppercase typo--light mt-0 mb-0 typo--h1__widescreen">
						What we did
					</h3>
				</div>
				<div class="column">
					<!-- Text -->
					<p class="mtypo--body mt-0 mb-0 typo--body-big__widescreen">
						<?php echo get_field( 'points_what_we_did' ) ?>
					</p>
				</div>
			</div>
			<!-- Part 2 -->
			<div class="case-points__columns columns py-m py-l__desktop py-2xl__widescreen py-3xl__fullhd">
				<div class="column mb-m mb-0__tablet is-flex-tablet align-items--center">
					<!-- Title -->
					<h3 class="typo--h3 typo--unbounded is-uppercase typo--light mt-0 mb-0 typo--h1__widescreen">
						Challenge
					</h3>
				</div>
				<div class="column">
					<!-- Text -->
					<p class="mtypo--body mt-0 mb-0 typo--body-big__widescreen">
						<?php echo get_field( 'points_challenge' ) ?>
					</p>
				</div>
			</div>
			<!-- Part 3 -->
			<div class="case-points__columns columns py-m py-l__desktop py-2xl__widescreen py-3xl__fullhd">
				<div class="column mb-m mb-0__tablet is-flex-tablet align-items--center">
					<!-- Title -->
					<h3 class="typo--h3 typo--unbounded is-uppercase typo--light mt-0 mb-0 typo--h1__widescreen">
						Objectives
					</h3>
				</div>
				<div class="column">
					<?php
					if ( have_rows( 'points_objectives_repeater' ) ) {
						?>
						<!-- Text -->
						<ul class="typo--body pl-xs mt-0 mb-0 typo--body-big__widescreen">
							<?php
							while ( have_rows( 'points_objectives_repeater' ) ) {
								the_row();
								?>
								<li class="pl-3xs <?php echo get_row_index() == 1 ? '' : 'mt-xs' ?>">
									<?php echo get_sub_field( 'points_objective' ) ?>
								</li>
								<?php
							}
							?>
						</ul>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>