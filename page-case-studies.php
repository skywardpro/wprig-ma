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

function marketacross_page_case_studies_get_case_card_version( $index ) {

	$card_version = 1; // First Item only is v1
	$card_version_sequence = [ 2, 3, 3, 4, 3, 3, 2 ]; // The repeating part (7 elements)
	if ( $index != 0 ) {
		$sequence_position = ( $index - 1 ) % 7; // Cycle through 0-6
		$card_version = $card_version_sequence[ $sequence_position ];
	}

	return $card_version;
}

function marketacross_page_case_studies_get_column_class($card_version, $current_index, $post_count, $prev_column_class) {
	
	$column_class = $card_version != 3 ? 'is-full' : 'is-half-desktop';

	// If last post and prev post was not is-half-desktop then set to is-full
	if ( $current_index + 1 == $post_count && $prev_column_class !== 'is-half-desktop' ) {
		$column_class = 'is-full';
	}

	return $column_class;
}

?>
<main id="primary" class="site-main">

	<div id="case-studies-page" class="bg-color--gradient">

		<!-- Hero - Section -->
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

		<!-- PostCards - Section -->
		<?php
		$args = array(
			'post_type' => 'case_study',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'order' => 'DESC',
			'meta_type' => 'DATE'
		);
		$query = new \WP_Query( $args );
		?>
		<section class="case-studies-page-items pb-6xl">
			<div class="container">
				<!-- Cards -->
				<div class="columns is-multiline">
					<?php
					if ( $query->have_posts() ) {

						$prev_column_class = '';

						while ( $query->have_posts() ) {
							$query->the_post();

							// Get vars used in layout
							$card_version = marketacross_page_case_studies_get_case_card_version( $query->current_post );
							$column_class = marketacross_page_case_studies_get_column_class(
								$card_version, $query->current_post, $query->post_count, $prev_column_class
							);

							// Update $prev_column_class for use in next iteration
							$prev_column_class = $column_class;
							
							// Layout Cards
							?>
							<div class="column <?php echo $column_class ?>">
								<?php get_template_part( 'template-parts/partials/case-studies-page-item-v' . $card_version ) ?>
							</div>
							<?php
						}
						wp_reset_postdata();
					}
					?>

				</div>
			</div>
		</section>
	</div>
</main>
<?php
get_footer();
