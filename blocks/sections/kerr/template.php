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


<section class="section section-slider-kerr">
	<div class="container">
		<div class="kerr-row">
			<div class="kerr-row-item">
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
			<div class="kerr-row-item">
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





