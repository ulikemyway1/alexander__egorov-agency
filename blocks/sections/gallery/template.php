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

<section class="section section-gallery">
	<div class="container">
		<h2 class="section__title">our gallery</h2>
		<h3 class="section__subtitle">A fitness training center for<br>women, by women</h3>

		<div class="gallery__grid-wrapper">

	

				<a href="#/" class="gallery__category span-row" id="personal" data-bs-toggle="modal"
					data-bs-target="#gallery-personal-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Personal<br>Training</div>
						<div class="gallery__category-info_count">5 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="demand" data-bs-toggle="modal"
					data-bs-target="#gallery-demand-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">On-Demand<br>Programs</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="beginners" data-bs-toggle="modal"
					data-bs-target="#gallery-beginners-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Beginners<br>Welcome</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>


				<a href="#/" class="gallery__category" id="virtual" data-bs-toggle="modal"
					data-bs-target="#gallery-virtual-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Virtual/Hybrid<br>Training</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>


				<a href="#/" class="gallery__category" id="mind" data-bs-toggle="modal"
					data-bs-target="#gallery-mind-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">The mind<br>fitness</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>
		

			

				<a href="#/" class="gallery__category span-col" id="semi-private" data-bs-toggle="modal"
					data-bs-target="#gallery-semi-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Semi-Private Training<br>for Women</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="nutrition" data-bs-toggle="modal"
					data-bs-target="#gallery-nutrition-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Nutrition<br>Program</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="co-ed" data-bs-toggle="modal"
					data-bs-target="#gallery-co-ed-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Co-ed<br>Training</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category span-col" id="functional" data-bs-toggle="modal"
					data-bs-target="#gallery-functional-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Functional<br>Fitness</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>



		</div>
	<button class="button gallery__load-more-btn">Load More</button>
	</div>

</section>

<!-- //gallery modals// -->

<div class="modal fade" id="gallery-personal-modal" tabindex="-1" aria-labelledby="Testimonials video"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" title="Close">
				<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M13.3259 12.001L23.7254 1.60144C24.0916 1.2353 24.0916 0.641675 23.7254 0.275582C23.3593 -0.0905116 22.7657 -0.0905585 22.3996 0.275582L12 10.6752L1.60046 0.275582C1.23432 -0.0905585 0.640698 -0.0905585 0.274605 0.275582C-0.0914881 0.641722 -0.091535 1.23535 0.274605 1.60144L10.6741 12.001L0.274605 22.4005C-0.091535 22.7667 -0.091535 23.3603 0.274605 23.7264C0.457651 23.9095 0.697604 24.001 0.937557 24.001C1.17751 24.001 1.41742 23.9095 1.60051 23.7264L12 13.3269L22.3995 23.7264C22.5826 23.9095 22.8225 24.001 23.0625 24.001C23.3024 24.001 23.5423 23.9095 23.7254 23.7264C24.0916 23.3603 24.0916 22.7666 23.7254 22.4005L13.3259 12.001Z"
						fill="currentColor" />
				</svg>

			</button>

			<div class="modal-body">
			<div class="gallery-slider">
					<div class="swiper gallery-slider">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper gallery-slider">
							<!-- Slides -->
							<div class="swiper-slide gallery-slide" id="gallery-slide-1">
								
							</div>
							<div class="swiper-slide gallery-slide"  id="gallery-slide-2">
								
							</div>
							<div class="swiper-slide gallery-slide"  id="gallery-slide-3">
								
							</div>


						</div>
					</div>
					<div class="gallery-slider-navigation-wrapper">
						<div class="swiper-button-prev gallery-slider">
							<svg width="100%" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
								<path
									d="m.856 10.429 8.559-8.58a.977.977 0 0 1 1.383 1.379l-8.56 8.581c-.381.38-.381 1 0 1.382l8.56 8.58a.977.977 0 1 1-1.383 1.38L.857 14.57a2.933 2.933 0 0 1-.001-4.142Z"
									fill="currentColor" />
								<path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"
									fill="currentColor" />
							</svg>
						</div>
						<div class="swiper-pagination gallery-slider"></div>
						<div class="swiper-button-next gallery-slider">
							<svg width="100%" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
								<path
									d="m24.144 10.429-8.559-8.58a.977.977 0 0 0-1.383 1.379l8.56 8.581c.381.38.381 1 0 1.382l-8.56 8.58a.977.977 0 1 0 1.383 1.38l8.558-8.58a2.933 2.933 0 0 0 .001-4.142Z"
									fill="currentColor" />
								<path d="M18.702 11.523H.977a.977.977 0 0 0 0 1.954h17.725a.977.977 0 1 0 0-1.954Z"
									fill="currentColor" />
							</svg>
						</div>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>




