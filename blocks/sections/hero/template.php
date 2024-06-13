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

<section class="section section-slider-kerr">
	<div class="container">
		<div class="row kerr-row">
			<div class="col-12 col-xl-6">
				<div class="kerr-info">
					<div class="kerr-info__content-wrapper">
						<div class="kerr-info__title">Alli Kerr</div>
						<div class="kerr-info__text">
							<span class="capitalize">business.</span> Knowing I had more to offer
							the universe, I got the crazy idea to open my own brick and mortar fitness business. It was
							an
							itch that I had to scratch. In 2010 The Happy Fitness was born...
							<br>
							<a href="#" class="link read-more">Read more</a>
						</div>
						<div class="kerr-info__button-wrapper">
							<a href="#" class="button like-button watch-video-btn ">Watch Video of The Bio</a>
							<a href="#" class="button like-button no-fill learn-more-btn">Learn More</a>
						</div>
					</div>

				</div>
			</div>
			<div class="col-12 col-xl-6">
				<div class="row justify-content-center"">
					<div class=" col-10">
					<div class="kerr-title">Hear from the people who know me best</div>
				</div>
			</div>
			<div class="row justify-content-center"">
					<div class=" col-10">
				<div class="section-slider-kerr-wrapper">
					<div class="swiper kerr">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper kerr">
							<!-- Slides -->
							<div class="swiper-slide">
								<article class="kerr-slide">
									<div class="kerr-slide__title">Sally Profit</div>
									<div class="kerr-slide__scores">
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>

									</div>
									<p class="kerr-slide__text">The Happy Fitness has it going on!!! I love this
										gym, the staff and all
										the members. I have been in different gyms all my life and the Happy
										Fitness is the best by far.
										The staff are very knowledgeable about all aspects of exercise and
										nutrition. Whether you are
										using the trainers or not, they will always help make sure you are doing
										the exercises correctly
										so you get the best benefit and do not hurt yourself. I never thought I
										would care one way or
										the other if I was in an all female gym, but now that I am I truly love
										it. The other aspect I
										love about this gym is the cleanliness. The staff works very hard
										keeping the gym orderly and
										spotless. Check it out...I promise you it won't disappoint!!</p>
								</article>
							</div>
							<div class="swiper-slide">
								<article class="kerr-slide">
									<div class="kerr-slide__title">Sally Bally</div>
									<div class="kerr-slide__scores">
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>

									</div>
									<p class="kerr-slide__text">The Happy Fitness has it going on!!! I love this
										gym, the staff and all
										the members. I have been in different gyms all my life and the Happy
										Fitness is the best by far.
										The staff are very knowledgeable about all aspects of exercise and
										nutrition. Whether you are
										using the trainers or not, they will always help make sure you are doing
										the exercises correctly
										so you get the best benefit and do not hurt yourself. I never thought I
										would care one way or
										the other if I was in an all female gym, but now that I am I truly love
										it. The other aspect I
										love about this gym is the cleanliness. The staff works very hard
										keeping the gym orderly and
										spotless. Check it out...I promise you it won't disappoint!!</p>
								</article>
							</div>
							<div class="swiper-slide">
								<article class="kerr-slide">
									<div class="kerr-slide__title">Sally Bally</div>
									<div class="kerr-slide__scores">
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>
										<svg class="kerr-slide__score" width="100% " viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M4.52736 15.5148C4.30348 15.6708 4.04847 15.7485 3.79359 15.7485L3.78969 15.7485C3.52747 15.748 3.26564 15.6652 3.03849 15.5002C2.58939 15.1742 2.40299 14.6202 2.56363 14.0889L3.74808 10.1697C3.77335 10.0861 3.74393 9.99414 3.67472 9.9408L0.50101 7.49146C0.202756 7.26129 0.0290369 6.92981 0.00335014 6.57551C-0.00904851 6.40511 0.0128109 6.2294 0.0715444 6.05713C0.251842 5.52844 0.72755 5.18677 1.2837 5.18677H5.2454C5.33951 5.18677 5.41825 5.13379 5.4462 5.05188L6.78409 1.12024C6.96427 0.591431 7.4412 0.25 7.9993 0.25H8.00074C8.55885 0.25 9.03578 0.591431 9.21595 1.12024L10.5538 5.05188C10.5818 5.13379 10.6605 5.18677 10.7547 5.18677H14.716C15.2721 5.18677 15.7482 5.52844 15.9285 6.05713C15.985 6.22294 16.0074 6.39193 15.9979 6.55631C15.997 6.57196 15.9959 6.58758 15.9944 6.60314C15.9619 6.94701 15.7895 7.26729 15.499 7.49146L12.3253 9.9408C12.2561 9.99414 12.2267 10.0861 12.252 10.1697L13.4364 14.0889C13.5971 14.6202 13.4107 15.1742 12.9616 15.5002C12.7344 15.6652 12.4726 15.748 12.2104 15.7485L12.2065 15.7485C11.9516 15.7485 11.6966 15.6708 11.4727 15.5148L8.12052 13.1798C8.08447 13.1547 8.04227 13.1421 8.00002 13.1419C7.95777 13.1421 7.91557 13.1547 7.87953 13.1798L4.52736 15.5148Z"
												fill="currentColor" />
										</svg>

									</div>
									<p class="kerr-slide__text">The Happy Fitness has it going on!!! I love this
										gym, the staff and all
										the members. I have been in different gyms all my life and the Happy
										Fitness is the best by far.
										The staff are very knowledgeable about all aspects of exercise and
										nutrition. Whether you are
										using the trainers or not, they will always help make sure you are doing
										the exercises correctly
										so you get the best benefit and do not hurt yourself. I never thought I
										would care one way or
										the other if I was in an all female gym, but now that I am I truly love
										it. The other aspect I
										love about this gym is the cleanliness. The staff works very hard
										keeping the gym orderly and
										spotless. Check it out...I promise you it won't disappoint!!</p>
								</article>
							</div>


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

	<!-- Slider main container -->

</section>

<section class="section section-before-after">
	<div class="container">
		<div class="row before-after-row">
			<div class="col-12 col-xl-4">
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

			<div class="col-12 col-xl-7">
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



<section class="section section-gallery">
	<div class="container">
		<h2 class="section__title">our gallery</h2>
		<h3 class="section__subtitle">A fitness training center for<br>women, by women</h3>

		<div class="gallery">

			<div class="gallery__part-one">

				<a href="#/" class="gallery__category gallery__wide" id="personal" data-bs-toggle="modal"
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
			</div>

			<div class="gallery__part-two">

				<a href="#/" class="gallery__category gallery__wide" id="semi-private" data-bs-toggle="modal"
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

				<a href="#/" class="gallery__category gallery__wide" id="functional" data-bs-toggle="modal"
					data-bs-target="#gallery-functional-modal">
					<div class="gallery__category-info">
						<div class="gallery__category-info_title">Functional<br>Fitness</div>
						<div class="gallery__category-info_count">2 photos</div>
					</div>
				</a>

			</div>

		</div>

	</div>

</section>


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
					aria-selected="false">BBreastBreastBreastBreastBreastBreastBreastBreastreast</button>
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




