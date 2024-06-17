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


<section class="section section-offers">

	<div class="offers-tabs">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
					role="tab" aria-controls="home" aria-selected="true">Body</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
					role="tab" aria-controls="profile"
					aria-selected="false">Breast</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button"
					role="tab" aria-controls="messages" aria-selected="false">Buttocks</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button"
					role="tab" aria-controls="settings" aria-selected="false">Mens</button>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane offers active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Brow Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Facelift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Septoplasty</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Chin<br>Augmentation</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Morpheus8</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Injectables</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Ear Surgery</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Neck Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Dysport®</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Eyelid Surgery</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Rhinoplasty</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>AccuTite™<br>and FaceTite®</span>
				</div>

			</div>


			<div class="tab-pane offers" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Rhinoplasty</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>AccuTite™<br>and FaceTite®</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Rhinoplasty</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>AccuTite™<br>and FaceTite®</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Rhinoplasty</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>AccuTite™<br>and FaceTite®</span>
				</div>
			</div>


			<div class="tab-pane offers" id="messages" role="tabpanel" aria-labelledby="messages-tab">
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Brow Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Facelift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Brow Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Facelift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Brow Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Facelift</span>
				</div>
			</div>


			<div class="tab-pane offers" id="settings" role="tabpanel" aria-labelledby="settings-tab">
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Brow Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Facelift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Brow Lift</span>
				</div>
				<div class="offers-item">
					<svg class="offers-arrow" width="100%" viewBox="0 0 6 10" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25 8.5L4.75 5L1.25 1.5" stroke="currentColor" stroke-width="2"
							stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<span>Facelift</span>
				</div>
			</div>

		</div>
	</div>
	<!-- Nav tabs -->
</section>


