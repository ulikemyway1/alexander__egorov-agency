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
$kerr_title = get_field('kerr-heading');

$kerr_slides = get_field('kerr-slides');

$kerr_descr = get_field('alli_kerr_description');
$kerr_descr_parts = get_extended($kerr_descr);
$kerr_descr_more = $kerr_descr_parts['extended'];
?>


<section class="section section-slider-kerr">
	<div class="container">
		<div class="kerr-row">
			<div class="kerr-row-item">
				<div class="kerr-info">
					<div class="kerr-info__content-wrapper">
						<div class="kerr-info__title">Alli Kerr</div>
						<div class="kerr-info__text styled-scrollbars-pink">
							<?= $kerr_descr_parts['main'] ?>
							<?php if (!empty($kerr_descr_more)): ?>
								<div id="kerr-read-more">
									<?= $kerr_descr_more ?>
								</div>
								<br>
								<button class="link read-more" id="kerr_read-more-btn" aria-expanded="false"
									aria-controls="collapse-read-more-kerr">
									Read more
								</button>
							<?php endif; ?>

						</div>
						<div class="kerr-info__button-wrapper">
							<a href="#" class="button like-button watch-video-btn ">Watch Video of The Bio</a>
							<a href="#" class="button like-button no-fill learn-more-btn">Learn More</a>
						</div>
					</div>

				</div>
			</div>
			<div class="kerr-row-item">
				<div class="row justify-content-center"">
					<div class=" col-10">
					<div class="kerr-title"><?= $kerr_title ?></div>
				</div>
			</div>
			<div class="row justify-content-center"">
					<div class=" col-10">
				<div class="section-slider-kerr-wrapper">
					<div class="swiper kerr">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper kerr">
							<!-- Slides -->
							<?php if (!empty($kerr_slides)): ?>

								<?php foreach ($kerr_slides as $slide): ?>
									<?php

									$title = !empty($slide['slide_title']) ? $slide['slide_title'] : '';
									$rating = !empty($slide['slide_rating']) ? $slide['slide_rating'] : '';
									$text = !empty($slide['slide']) ? $slide['slide'] : '';
									$star = '<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
										fill="currentColor" />
								</svg>'
										?>
									<div class="swiper-slide">
										<article class="kerr-slide">
											<div class="kerr-slide__title"><?= $title ?></div>
											<div class="kerr-slide__scores">
												<?php
												for ($i = 1; $i <= intval($rating); $i++) {
													echo ($star);
												}
												?>
											</div>
											<p class="kerr-slide__text styled-scrollbars-pink"><?= $text ?></p>
										</article>
									</div>

								<?php endforeach; ?>

							<?php endif ?>
						</div>


					</div>
					<div class="swiper-kerr-navigation-wrapper">
						<div class="swiper-button-prev kerr">
							<svg width="100%" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
								<path
									d="m.856 10.429 8.559-8.58a.977.977 0 0 1 1.383 1.379l-8.56 8.581c-.381.38-.381 1 0 1.382l8.56 8.58a.977.977 0 1 1-1.383 1.38L.857 14.57a2.933 2.933 0 0 1-.001-4.142Z"
									fill="currentColor" />
								<path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"
									fill="currentColor" />
							</svg>
						</div>
						<div class="swiper-pagination kerr"></div>
						<div class="swiper-button-next kerr">
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
	</div>
</section>