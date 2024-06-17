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

<section class="section section-testimonials">
	<div class="container">
		<h2 class="testimonials__title">Testimonials</h2>
		<div class="testimonials__video-wrapper">
			<a href="#" class="testimonials__video-link" data-bs-toggle="modal" data-bs-target="#modal-e-2">
				<svg width="40" viewBox="0 0 40 42" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0.96582 2.01218V39.9933C0.96582 40.8968 1.92472 41.4778 2.72561 41.0596L38.9645 22.1338C39.8245 21.6847 39.8262 20.4544 38.9674 20.0028L2.7286 0.947475C1.92757 0.526276 0.96582 1.10717 0.96582 2.01218Z"
						fill="currentColor" />
				</svg>

			</a>
			<a href="#" class="testimonials__video-link" data-bs-toggle="modal" data-bs-target="#modal-e-3">
				<svg width="40" viewBox="0 0 40 42" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0.96582 2.01218V39.9933C0.96582 40.8968 1.92472 41.4778 2.72561 41.0596L38.9645 22.1338C39.8245 21.6847 39.8262 20.4544 38.9674 20.0028L2.7286 0.947475C1.92757 0.526276 0.96582 1.10717 0.96582 2.01218Z"
						fill="currentColor" />
				</svg>
			</a>
			<a href="#" class="testimonials__video-link" data-bs-toggle="modal" data-bs-target="#modal-e-4">
				<svg width="40" viewBox="0 0 40 42" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0.96582 2.01218V39.9933C0.96582 40.8968 1.92472 41.4778 2.72561 41.0596L38.9645 22.1338C39.8245 21.6847 39.8262 20.4544 38.9674 20.0028L2.7286 0.947475C1.92757 0.526276 0.96582 1.10717 0.96582 2.01218Z"
						fill="currentColor" />
				</svg>
			</a>
		</div>
	</div>
</section>


<div class="modal fade" id="modal-e-2" tabindex="-1" aria-labelledby="Testimonials video" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button id="video-e-modal-2" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
				title="Close">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
						fill="currentColor" />
				</svg>

			</button>
			<video playsinline="true" class="modal-video" id='video-e-2' src="" controls="off"></video>

		</div>
	</div>
</div>

<div class="modal fade" id="modal-e-3" tabindex="-1" aria-labelledby="Testimonials video" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button id="video-e-modal-3" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
				title="Close">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
						fill="currentColor" />
				</svg>

			</button>
			<video playsinline="true" class="modal-video" id='video-e-3' src="" controls="off"></video>

		</div>
	</div>
</div>

<div class="modal fade" id="modal-e-4" tabindex="-1" aria-labelledby="Testimonials video" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button id="video-e-modal-4" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
				title="Close">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
						fill="currentColor" />
				</svg>

			</button>
			<video playsinline="true" class="modal-video" id='video-e-4' src="" controls="off"></video>

		</div>
	</div>
</div>