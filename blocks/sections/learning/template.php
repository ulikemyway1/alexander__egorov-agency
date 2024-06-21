<?php
/**
 * Block Learning.
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

<section class="section section-learning">
	<div class="container">
		<div class="learning__title">Learning Center</div>
		<div class="learning__subtitle">A fitness training center for women, by women</div>
		<div class="learning__sliders-wrapper">
			<div class="learning-huge-slider">
				<div class="swiper learning-huge">
					<!-- Additional required wrapper -->
					<div class="play-video-btn">
					<svg  width="80" height="80" viewBox="0 0 80 80" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<path
							d="M68.2844 11.7156C60.7292 4.16063 50.6844 0 40 0C29.3155 0 19.2706 4.16063 11.7156 11.7156C4.16078 19.2705 0 29.3155 0 40C0 50.6844 4.16078 60.7292 11.7156 68.2842C19.2706 75.8392 29.3155 80 40 80C50.6842 80 60.7291 75.8392 68.2844 68.2842C75.8392 60.7292 80 50.6844 80 40C80 29.3155 75.8392 19.2705 68.2844 11.7156Z"
							fill="black" fill-opacity="0.5" />
						<path
							d="M24.9648 21.0122V58.9933C24.9648 59.8968 25.9237 60.4778 26.7246 60.0596L62.9635 41.1338C63.8235 40.6847 63.8253 39.4544 62.9665 39.0028L26.7276 19.9475C25.9266 19.5263 24.9648 20.1072 24.9648 21.0122Z"
							fill="white" />
					</svg>
					</div>
					<div class="stop-video-btn vs-removed">P</div>
					


					<div class="swiper-wrapper learning-huge">
						<!-- Slides -->
						<article class="swiper-slide learning-huge">
							
							<video playsinline="true" class="learning-video video-learning-1" src=""></video>
							<div class="slide-overlay">
								<div class="slide-overlay__title">Michael Martin</div>
								<div class="slide-overlay__subtitle">Nutritionist</div>
							</div>
						</article>

						<article class="swiper-slide learning-huge">
						
							<video playsinline="true" class="learning-video video-learning-2" src=""></video>
							<div class="slide-overlay">
								<div class="slide-overlay__title">Rebecca Henderson</div>
								<div class="slide-overlay__subtitle">Nutritionist</div>
							</div>
						</article>

						<article class="swiper-slide learning-huge">
							
							<video playsinline="true" class="learning-video video-learning-3" src=""></video>
							<div class="slide-overlay">
								<div class="slide-overlay__title">Fernando Gibson</div>
								<div class="slide-overlay__subtitle">Yoga trainer</div>
							</div>
						</article>

					</div>
				</div>

				<div class="learning-huge-slider-navigation-wrapper learning-huge">
					<div class="swiper-button-prev learning-huge">
						<svg width="100%" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
							<path
								d="m.856 10.429 8.559-8.58a.977.977 0 0 1 1.383 1.379l-8.56 8.581c-.381.38-.381 1 0 1.382l8.56 8.58a.977.977 0 1 1-1.383 1.38L.857 14.57a2.933 2.933 0 0 1-.001-4.142Z"
								fill="currentColor" />
							<path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"
								fill="currentColor" />
						</svg>
					</div>
					<div class="swiper-pagination learning-huge"></div>
					<div class="swiper-button-next learning-huge">
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


			<div class=learning-small-slider">
				<div class="swiper learning-small">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<article class="swiper-slide learning-small ">
							<div class="slide-overlay">
								<div class="slide-overlay__title">Rebecca Henderson</div>
								<div class="slide-overlay__subtitle">Fitness trainer</div>
							</div>
							<video playsinline="true" class="learning-video video-learning-2" src=""></video>
						</article>

						<article class="swiper-slide learning-small ">
							<div class="slide-overlay">
								<div class="slide-overlay__title">Fernando Gibson</div>
								<div class="slide-overlay__subtitle">Yoga trainer</div>
							</div>
							<video playsinline="true" class="learning-video video-learning-3" src=""></video>
						</article>

						<article class="swiper-slide learning-small ">
							<div class="slide-overlay">
								<div class="slide-overlay__title">Michael Martin</div>
								<div class="slide-overlay__subtitle">Nutritionist</div>
							</div>
							<video playsinline="true" class="learning-video video-learning-1" src=""></video>
						</article>

					</div>
				</div>
			</div>
		</div>


	</div>
	</div>



</section>