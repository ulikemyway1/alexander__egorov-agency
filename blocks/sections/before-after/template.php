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

<section class="section section-before-after">
	<div class="container">
		<div class="before-after-row">
			<div class="before-after-row-item">
				<div class="before-after-description-slider">
					<div class="swiper before-after-description">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper before-after-description">
							<!-- Slides -->
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Women,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Men,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I believe when you truly commit to making a change, you will not see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
							<article class="swiper-slide before-after-description">
								<div class="before-after-description__title">Real Animsla,<br>Real Results</div>
								<div class="before-after-description__subtitle">
									I can't believe when you truly commit to making a change, you will see results
								</div>
							</article>
						</div>
					</div>
					<div class="before-after-slider-navigation-wrapper before-after-description">
						<div class="swiper-button-prev before-after-description">
							<svg width="100%" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
								<path
									d="m.856 10.429 8.559-8.58a.977.977 0 0 1 1.383 1.379l-8.56 8.581c-.381.38-.381 1 0 1.382l8.56 8.58a.977.977 0 1 1-1.383 1.38L.857 14.57a2.933 2.933 0 0 1-.001-4.142Z"
									fill="currentColor" />
								<path d="M6.298 11.523h17.725a.977.977 0 0 1 0 1.954H6.298a.977.977 0 1 1 0-1.954Z"
									fill="currentColor" />
							</svg>
						</div>
						<div class="swiper-pagination before-after-description"></div>
						<div class="swiper-button-next before-after-description">
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

			<div class="before-after-row-item slider">
				<div class="before-after-photo-slider">
					<div class="swiper before-after-photo">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-first"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-second"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-third"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-fourth"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-fifth"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-sixth"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-seventh"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-eight"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
							<article class="swiper-slide">
								<div class="before-after-slide-wrapper">
									<div id="before-after-ninth"></div>
									<div class="before-after-slide-descr">
										<span>Before</span>
										<span>After</span>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>

</section>