<?php

/**
 * Template part for displaying Contact Us Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="contact-us" class="contact-us mb-6xl mb-8xl__desktop pb-xl__widescreen">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-xs mb-m__desktop">
			[&nbsp;&nbsp;CONTACT US&nbsp;&nbsp;]
		</h2>

		<!-- Subheading -->
		<p class="typo--h2 typo--semibold mt-0 mb-xl mb-m__desktop">
			Schedule a 30 min call with us and share the challenge you have
		</p>

		<!-- Form -->
		<form id="contact-us-form" class="contact-us-form">

			<!-- Name -->
			<div class="mb-xs">
				<label class="is-hidden-touch is-block typo--body-big typo--medium mb-3xs" for="name">
					Full Name
				</label>
				<input type="text" id="name" name="name" placeholder="Full Name" class="w-100">
			</div>

			<div class="is-flex-tablet">

				<!-- Mail -->
				<div class="mb-xs w-50__tablet mr-3xs__tablet">
					<label class="is-hidden-touch is-block typo--body-big typo--medium mb-3xs" for="email">
						Business email
					</label>
					<input type="email" id="email" name="email" placeholder="Business email" class="w-100">
				</div>

				<!-- Phone -->
				<div class="mb-xs w-50__tablet ml-3xs__tablet">
					<label class="is-hidden-touch is-block typo--body-big typo--medium mb-3xs" for="phone">
						Phone
					</label>
					<input type="tel" id="phone" name="phone" placeholder="Phone" class="w-100">
				</div>
			</div>

			<!-- Message -->
			<div class="mb-xs mb-m__desktop">
				<label class="is-hidden-touch is-block typo--body-big typo--medium mb-3xs" for="message">
					Enter your message
				</label>
				<textarea id="message" name="message" placeholder="Enter your message" rows="4" class="w-100"></textarea>
			</div>

			<!-- Submit -->
			<button type="submit" class="reset-button-styles btn--primary is-full-mobile">Contact Sales</button>
		</form>
	</div>
</section>