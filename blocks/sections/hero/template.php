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
					<button class="button consulting-button" data-toggle="modal" data-target="#consulting-modal"
						id="book_consulting">Book Consultation</button>
					<button class="button consulting-button no-fill">
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

<section class="section section-gallery">
	<div class="container">
		<h2 class="section__title">our gallery</h2>
		<h3 class="section__subtitle">A fitness training center for<br>women, by women</h3>

		<div class="gallery">

			<div class="gallery__part-one">

				<a href="#/" class="gallery__category gallery__wide" id="personal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Personal<br>Training</div>
						<div class="gallery__category-info_count">5 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="demand">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">On-Demand<br>Programs</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="beginners">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Beginners<br>Welcome</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>


				<a href="#/" class="gallery__category" id="virtual">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Virtual/Hybrid<br>Training</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>


				<a href="#/" class="gallery__category" id="mind">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">The mind<br>fitness</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>
			</div>

			<div class="gallery__part-two">

				<a href="#/" class="gallery__category gallery__wide" id="semi-private">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Semi-Private Training<br>for Women</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="nutrition">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Nutrition<br>Program</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category" id="co-ed">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Co-ed<br>Training</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

				<a href="#/" class="gallery__category gallery__wide" id="functional">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Functional<br>Fitness</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

			</div>

		</div>

	</div>


</section>

<div id="gallery__popup" class="hidden"></div>

<div class="swiper">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide">Slide 1</div>
		<div class="swiper-slide">Slide 2</div>
		<div class="swiper-slide">Slide 3</div>
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev">prev</div>
	<div class="swiper-button-next">next</div>

	<!-- If we need scrollbar -->
	<div class="swiper-scrollbar"></div>
</div>

<!-- <div class="modal" tabindex="-1" id="consulting-modal">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">Modal title</h5>
		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  </div>
	  <div class="modal-body">
		<p>Modal body text goes here.ddd</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	  </div>
	</div>
  </div>
</div> -->


<div class="modal" id="consulting-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal__content">

			<h2 class="modal__title">Book<br>Consultation</h2>

			<div class="modal__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis nullam pretium
				lectus est non arcu diam in varius.</div>


			<button type="button" class="modal__close-btn  no-fill" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>


			<div class="modal__body">
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
					<input class="modal__input" id='message' type="text" placeholder="Message" required>


					<button type="submit" class="button">Submit</button>
				</form>
			</div>




		</div>
	</div>
</div>