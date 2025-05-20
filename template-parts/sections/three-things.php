<?php

/**
 * Template part for displaying Three Things Section
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<section id="three-things" class="three-things mb-6xl pb-s__desktop mb-8xl__desktop pb-xl__widescreen">
	<div class="container">

		<!-- Heading -->
		<h2 class="typo--tag-small typo--tag-big__desktop typo--regular color--purple mt-0 mb-xs mb-m__desktop">
			[&nbsp;&nbsp;TAG?&nbsp;&nbsp;]
		</h2>

		<!-- Subheading -->
		<p class="typo--h3 typo--h1__desktop typo--unbounded typo--light mt-0 mb-m mb-4xl__desktop mb-5xl__widescreen">
			THREE THINGS YOU SHOULD <br>KNOW ABOUT US
		</p>

		<!-- Body -->
		<div class="three-things__body">
			<!-- Image -->
			<picture>
				<source media="(min-width: 1456px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/three-things-fullhd.webp">
				<source media="(min-width: 1216px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/three-things-widescreen.webp">
				<source media="(min-width: 1024px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/three-things-desktop.webp">
				<source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri() ?>/assets/images/three-things-tablet.webp">
				<img width="343" height="189" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/three-things-mobile.webp" alt="Three Things From MarketAcross" class="three-things__main-image mb-m mb-0__touch">
			</picture>

			<!-- Row 1 (for 1st card only) -->
			<div class="columns is-gapless mb-0 justify-content--center__desktop">

				<div class="column is-4-desktop mb-l mb-m__tablet mb-5xl__desktop">
					<div class="px-3xs__desktop">
						<!-- Card 1 -->
						<div class="has-box-shadow bg-backdrop--blur bg-color--white-60 is-rounded--4xs p-xs p-m__tablet p-l__desktop">
							<!-- Title -->
							<h3 class="typo--subtitle-big typo--semibold mt-0 mb-m mb-l__desktop">
								Crypto-nativesince 2012
							</h3>
							<!-- Text -->
							<p class="typo--body-big typo--medium typo--body__tablet typo--body-big__widescreen my-0">
								We didn’t jump on the blockchain wagon by adding a “crypto PR” tab to our site; we’ve been doing this, and only this, since our inception
							</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Row 2 -->
			<div class="columns is-gapless is-multiline justify-content--space-between__desktop">

				<div class="column is-full is-4-desktop mb-l mb-m__tablet mb-5xl__desktop">
					<div class="pr-xs__desktop">
						<!-- Card 2 -->
						<div class="has-box-shadow bg-backdrop--blur bg-color--white-60 is-rounded--4xs p-xs p-m__tablet p-l__desktop">
							<!-- Title -->
							<h3 class="typo--subtitle-big typo--semibold mt-0 mb-m mb-l__desktop">
								Marketing-Driven PR
							</h3>
							<!-- Text -->
							<p class="typo--body-big typo--medium typo--body__tablet typo--body-big__widescreen my-0">
								Our work doesn’t end when we land a media hit for you; we then go on to further amplify and expand its impact, gaining marketing advantage over legacy PR agencies
							</p>
						</div>
					</div>
				</div>

				<div class="column is-full is-4-desktop mb-l mb-m__tablet mb-5xl__desktop">
					<div class="pl-xs__desktop">
						<!-- Card 3 -->
						<div class="has-box-shadow bg-backdrop--blur bg-color--white-60 is-rounded--4xs p-xs p-m__tablet p-l__desktop">
							<!-- Title -->
							<h3 class="typo--subtitle-big typo--semibold mt-0 mb-m mb-l__desktop">
								Results-based Retainer
							</h3>
							<!-- Text -->
							<p class="typo--body-big typo--medium typo--body__tablet typo--body-big__widescreen my-0">
								You don’t pay for our “representation”, you pay for media coverage; it’s the only fair model in our mind, money spent on tangible results
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- DropdownBlock -->
		<div id="dropdown-block" class="dropdown-block dropdown-block--expanded">
			<!-- ToggleBtnWrapper -->
			<div class="dropdown-block__toggle-wrapper is-flex justify-content--center">
				<!-- ToggleBtn -->
				<button class="dropdown-block__toggle-btn btn--primary">
					<span>Let’s&nbsp;connect</span>
					<svg aria-hidden="true" width="24" height="24">
						<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#chevron-up"></use>
					</svg>
				</button>
			</div>
			<!-- FormContainer -->
			<div class="dropdown-block__form-container">
				<!-- Form -->
				<form id="dropdown-block-form" class="dropdown-block__form dropdown-block-form">

					<!-- Name -->
					<div class="mb-xs">
						<input type="text" id="name" name="name" placeholder="Full Name" class="w-100">
					</div>

					<div class="is-flex-tablet">

						<!-- Mail -->
						<div class="mb-xs w-50__tablet mr-3xs__tablet">
							<input type="email" id="email" name="email" placeholder="Business email" class="w-100">
						</div>

						<!-- Phone -->
						<div class="mb-xs w-50__tablet ml-3xs__tablet">
							<input type="tel" id="phone" name="phone" placeholder="Phone" class="w-100">
						</div>
					</div>

					<!-- Message -->
					<div class="mb-xs mb-m__desktop">
						<textarea id="message" name="message" placeholder="Enter your message" rows="4" class="w-100"></textarea>
					</div>

					<!-- Submit -->
					<button type="submit" class="dropdown-block-form__submit-btn reset-button-styles btn--primary w-100">
						<span>Contact Sales</span>
						<svg aria-hidden="true" width="32" height="32">
							<use xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icons/sprite-svg/sprite.svg?ver=<?php echo esc_attr( wp_get_theme()->get( 'Version' ) ); ?>#icon-arrow-narrow-right"></use>
						</svg>
					</button>
				</form>
			</div>
		</div>
	</div>
</section>