<?php
/**
 * Block Hero.
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var $post_id (int|string) The post ID this block is saved to.
 */

/**
 * Block preview image
 */
if (isset($block['data']['block_preview_images'])) {
	hm_get_template_part_with_params('fragments/block-preview-image', ['block' => $block]);
	return;
}

/**
 * Block Variables
 */

?>

<section class="section section-hero">
	<div class="container">

		<div class="hero__wrapper">

			<nav class="hero__nav">
				<ol class="hero__nav_ol">
					<li class="hero__nav_li active"><a href="#" class="link hero__nav_link">Main</a></li>
					<li class="hero__nav_li"><a href="#/" class="link hero__nav_link">About Us</a></li>
					<li class="hero__nav_li"><a href="#" class="link hero__nav_link">Contact Us</a></li>
					<li class="hero__nav_li"><a href="#" class="link hero__nav_link">Before & After</a></li>
					<li class="hero__nav_li"><a href="#" class="link hero__nav_link">Resources</a></li>
					<li class="hero__nav_li"><a href="#" class="link hero__nav_link">Payment</a></li>
				</ol>
			</nav>

			<div class="hero__descr-wrapper">
				<h1 class="hero__title">
					<span>The</span>
					<span>Happy Fitness</span>
				</h1>
				<h2 class="hero__subtitle">Macon’s Premiere Boutuque Personal Training Studio</h2>

				<div class="hero__buttons-wrapper">
					<button class="button consulting-button" data-bs-toggle="modal" data-bs-target="#consulting-modal"
						id="book_consulting">Book Consultation</button>
					<button id="hero-video-btn" data-embed-1="true" class="button consulting-button no-fill"
						data-bs-toggle="modal" data-bs-target="#video-y-modal-hero">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none">
							<g clip-path="url(#a)">
								<path fill="#fff"
									d="M17.338 7.692 5.525.411A2.698 2.698 0 0 0 2.761.352c-.876.49-1.399 1.381-1.399 2.385v14.496c0 1.518 1.223 2.759 2.726 2.767H4.1c.47 0 .959-.147 1.416-.426a.78.78 0 1 0-.812-1.332c-.214.13-.423.198-.608.198a1.212 1.212 0 0 1-1.174-1.207V2.737c0-.43.224-.813.6-1.023.376-.21.82-.2 1.185.025L16.52 9.02c.355.219.558.583.557 1 0 .417-.205.78-.562.999l-8.54 5.229a.78.78 0 1 0 .814 1.33l8.54-5.228a2.712 2.712 0 0 0 1.308-2.327 2.712 2.712 0 0 0-1.299-2.33Z" />
							</g>
							<defs>
								<clipPath id="a">
									<path fill="#fff" d="M0 0h20v20H0z" />
								</clipPath>
							</defs>
						</svg>
						<span>Play Video</span>
					</button>
				</div>
			</div>
		</div>

	</div>
</section>



<div class="modal fade" id="consulting-modal" tabindex="-1" aria-labelledby="Book consulting modal with"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal__title">Book<br>Consultation</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

					<svg width="100%" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
							fill="#currenColor" />
					</svg>

				</button>
			</div>

			<div class="modal-body">
				<div class="modal-descr">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis nullam pretium lectus est non
					arcu diam in varius.
				</div>
				<form action="#" id="consulting-modal-form">
					<fieldset>
						<legend class="form__legend">Your first and last names</legend>
						<div class="form__inputs-wrapper">
							<label class="modal__label" for="first-name">First name</label>
							<input class="modal__input" id='first-name' type="text" placeholder="First Name" required>
							<label class="modal__label" for="last-name'">Last name</label>
							<input class="modal__input" id='last-name' type="text" placeholder="Last Name">

						</div>

					</fieldset>

					<fieldset>
						<legend class="form__legend">Your contacts</legend>

						<div class="form__inputs-wrapper">
							<label class="modal__label" for="email">Email</label>
							<input class="modal__input" id='email' type="email" placeholder="Email" required>

							<label class="modal__label" for="phone">Phone number</label>
							<input class="modal__input" id='phone' type="tel" placeholder="Phone number">
						</div>

					</fieldset>


					<label class="modal__label" for="message">Your message</label>
					<textarea class="modal__input modal__textarea" id='message' placeholder="Message"
						required></textarea>


					<button type="submit" class="button">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="video-y-modal-hero" tabindex="-1" aria-labelledby="Watch video" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button id="video-e-modal-1" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
					title="Close">
					<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
							fill="currentColor" />
					</svg>

				</button>
			</div>
			<div class="modal-body">
				<div class="modal-iframe-video" id='player-1'></div>
			</div>


		</div>
	</div>
</div>


<div class="modal fade" id="video-e-modal" tabindex="-1" aria-labelledby="Book consulting modal with"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button id="video-e-modal-1" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
				title="Close">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
						fill="currentColor" />
				</svg>

			</button>
			<video playsinline="true" class="modal-video" id='video-e-1' src="" controls="off"></video>

		</div>
	</div>
</div>



