<?php
/**
 * Block Header.
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

 $phone_number = get_field('phone_number');

 ?>


<header class="header">
	<div class="container">
		<div class="header-wrapper d-flex justify-content-between">
			<div class="header__menu-wrapper">
				<button class="header__menu-button" id="menu-toggle">
					<span class="button header__menu-button_icon" id="main-menu-btn__icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
							<g fill="#fff" clip-path="url(#a)">
								<path
									d="M16.875 0h-2.969a3.129 3.129 0 0 0-3.125 3.125v2.969a3.129 3.129 0 0 0 3.125 3.125h2.969A3.129 3.129 0 0 0 20 6.094V3.125A3.129 3.129 0 0 0 16.875 0Zm1.563 6.094c0 .861-.701 1.562-1.563 1.562h-2.969c-.861 0-1.562-.7-1.562-1.562V3.125c0-.862.7-1.563 1.562-1.563h2.969c.862 0 1.563.701 1.563 1.563v2.969ZM6.094 0H3.125A3.129 3.129 0 0 0 0 3.125v2.969a3.129 3.129 0 0 0 3.125 3.125h2.969a3.129 3.129 0 0 0 3.125-3.125V3.125A3.129 3.129 0 0 0 6.094 0Zm1.562 6.094c0 .861-.7 1.562-1.562 1.562H3.125c-.862 0-1.563-.7-1.563-1.562V3.125c0-.862.701-1.563 1.563-1.563h2.969c.861 0 1.562.701 1.562 1.563v2.969ZM6.094 10.781H3.125A3.129 3.129 0 0 0 0 13.906v2.969A3.129 3.129 0 0 0 3.125 20h2.969a3.129 3.129 0 0 0 3.125-3.125v-2.969a3.129 3.129 0 0 0-3.125-3.125Zm1.562 6.094c0 .862-.7 1.563-1.562 1.563H3.125c-.862 0-1.563-.701-1.563-1.563v-2.969c0-.861.701-1.562 1.563-1.562h2.969c.861 0 1.562.7 1.562 1.562v2.969ZM19.219 16.094a.781.781 0 0 0-.782.781c0 .862-.7 1.563-1.562 1.563h-2.969c-.861 0-1.562-.701-1.562-1.563v-2.969c0-.861.7-1.562 1.562-1.562h2.969c.621 0 1.184.368 1.433.937a.781.781 0 0 0 1.431-.626 3.126 3.126 0 0 0-2.864-1.874h-2.969a3.129 3.129 0 0 0-3.125 3.125v2.969A3.129 3.129 0 0 0 13.906 20h2.969A3.129 3.129 0 0 0 20 16.875a.781.781 0 0 0-.781-.781Z" />
							</g>
							<defs>
								<clipPath id="a">
									<path fill="#fff" d="M0 0h20v20H0z" />
								</clipPath>
							</defs>
						</svg>
					</span>
					<span class="header__menu-button_text link" id="main-menu-btn__text">Menu</span>
				</button>
				<?php if (!empty($phone_number)) : ?>
					
					<a href="tel:+4782543220" class="link header__tel-link">
					<span class="like-button">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%"  viewBox="0 0 34 34" fill="currentColor">
						<path fill="currentColor"
							d="M33.997 27.396a5.03 5.03 0 0 0-1.543-3.456c-1.855-1.788-3.409-2.82-4.89-3.25-2.042-.59-3.933-.053-5.621 1.596a.541.541 0 0 1-.008.007l-1.795 1.782c-1.123-.632-3.305-2.021-5.662-4.379l-.175-.174c-2.358-2.358-3.747-4.54-4.379-5.662l1.783-1.795.007-.008c1.648-1.688 2.185-3.579 1.595-5.62-.428-1.482-1.46-3.036-3.25-4.891A5.03 5.03 0 0 0 6.605.003a5.028 5.028 0 0 0-3.558 1.29l-.038.034a1.393 1.393 0 0 0-.052.05C1.006 3.325-.016 6.054 0 9.268c.027 5.46 3.028 11.705 8.027 16.704a32.365 32.365 0 0 0 3.184 2.772 1.328 1.328 0 1 0 1.617-2.108 29.737 29.737 0 0 1-2.922-2.543C5.39 19.58 2.68 14.032 2.656 9.256 2.644 6.781 3.39 4.715 4.81 3.28l.01-.01a2.39 2.39 0 0 1 3.328.12c3.438 3.566 3.19 5.25 1.67 6.808l-2.462 2.48a1.328 1.328 0 0 0-.27 1.476c.062.14 1.574 3.482 5.34 7.247l.174.175c3.765 3.765 7.106 5.277 7.247 5.34.5.223 1.087.115 1.476-.271l2.48-2.462c1.558-1.52 3.242-1.768 6.807 1.67.934.9.987 2.362.12 3.327l-.009.01c-1.424 1.41-3.468 2.155-5.917 2.155h-.06c-1.957-.01-4.224-.547-6.554-1.552a1.328 1.328 0 1 0-1.052 2.44c2.694 1.161 5.248 1.756 7.592 1.768h.075c3.182 0 5.884-1.021 7.819-2.956l.049-.052.034-.038a5.03 5.03 0 0 0 1.29-3.558Z" />
					</svg>
					</span>

					<span class="header__tel-link_text"><?=$phone_number?></span>
				</a>
					<?php endif; ?>
	
			</div>


			<a href="#" class="link header__logo">
				<svg width="100%" viewBox="0 0 65 44" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_408_7588)">
						<path
							d="M52.579 27.8921C54.6161 18.0638 48.8282 8.3278 39.6514 6.14608C30.4745 3.96437 21.3838 10.1631 19.3467 19.9914C17.3096 29.8197 23.0975 39.5557 32.2744 41.7375C41.4512 43.9192 50.5419 37.7204 52.579 27.8921Z"
							fill="currentColor" />
						<path
							d="M0.645508 16.3245C1.89566 19.1568 3.1458 21.8861 4.39595 24.7183C5.26144 24.3064 6.07884 23.8429 6.89625 23.4309C5.59801 20.5987 4.39595 17.8179 3.1458 15.0371C2.28032 15.4491 1.46291 15.9125 0.645508 16.3245Z"
							fill="currentColor" />
						<path
							d="M61.8549 15.3975C60.6048 18.2297 59.3546 20.959 58.1045 23.7913C58.97 24.2032 59.7874 24.6667 60.6048 25.0787C61.8549 22.2979 63.1051 19.5171 64.3552 16.6849C63.5378 16.2729 62.7204 15.8609 61.8549 15.3975Z"
							fill="currentColor" />
						<path
							d="M59.3068 9.01189C58.3932 11.0202 57.4797 13.0286 56.518 15.0884C55.5083 14.5734 54.4985 14.0585 53.5369 13.5435C53.7773 13.0286 54.0177 12.5651 54.21 12.1531C55.2198 9.93881 55.941 7.72449 55.8929 5.20119C55.8448 3.8623 55.6525 2.52341 54.9313 1.3905C54.1139 0.103103 52.7195 -0.36036 51.4212 0.309086C50.7962 0.669557 50.1711 1.13302 49.6903 1.69947C47.3823 4.53175 47.3823 8.70291 49.6422 11.7412C50.2192 12.5136 50.9404 13.2345 51.6617 14.007C51.2289 14.7279 50.7481 15.4489 50.3153 16.2213C47.5266 9.01189 40.8911 3.96529 33.1979 3.96529C25.5047 3.96529 18.8693 9.01189 16.0805 16.2213C16.0805 16.1698 16.0324 16.1698 16.0324 16.1698C15.6958 15.6549 15.4073 15.1399 15.0708 14.6764C15.5035 14.213 15.9362 13.8525 16.3209 13.389C18.3885 11.0202 19.2059 8.23945 18.3404 5.04671C17.8595 3.19285 16.8979 1.59648 15.2631 0.618061C13.5802 -0.411856 11.8973 0.154598 11.0799 2.00845C10.3587 3.65632 10.3106 5.40718 10.551 7.20953C10.8876 9.57834 11.8492 11.7412 12.9551 13.8525C13.0032 14.007 13.0994 14.11 13.1955 14.3675C11.8011 15.0369 10.4548 15.7063 9.06042 16.3243C7.90644 13.801 6.80054 11.4322 5.69463 9.01189C4.82915 9.47535 4.05982 9.88732 3.19434 10.3508C5.55039 15.5519 7.90644 20.7014 10.3106 25.851C11.1761 25.3876 11.9454 24.9756 12.8109 24.5636C11.753 22.2463 10.6952 19.9805 9.68549 17.7147C11.128 16.9937 12.4743 16.3243 13.9168 15.6549C13.9168 15.6549 13.9168 15.6549 13.9168 15.6034C13.9168 15.6034 13.9168 15.6034 13.9649 15.6034C14.3976 16.2728 14.8303 16.9422 15.2631 17.6117C15.3112 17.6632 15.3112 17.7147 15.3593 17.7662L15.5035 17.9722C14.9746 19.826 14.6861 21.8344 14.6861 23.8427C14.6861 33.009 20.5041 40.7333 28.3897 42.9992C28.7262 43.1021 29.0147 43.1536 29.3513 43.2566C29.4475 43.2566 29.5436 43.3081 29.6398 43.3081C29.6879 43.3081 29.736 43.3081 29.8321 43.3596C30.938 43.5656 32.0439 43.6686 33.1979 43.6686C34.4481 43.6686 35.6501 43.5141 36.8041 43.3081V43.3596C37.2369 43.2566 37.6696 43.1536 38.1023 43.0507V42.9992C45.9398 40.6818 51.7097 33.009 51.7097 23.8942C51.7097 21.8344 51.4212 19.826 50.8442 17.9722C51.0366 17.7147 51.1327 17.5087 51.1327 17.5087C51.6617 16.6848 52.1906 15.8608 52.7195 15.0369C52.7676 14.9854 52.8156 14.9339 52.8156 14.9339C53.8735 15.5004 54.8832 16.0153 55.8929 16.5303C54.6909 19.2081 53.4407 21.8859 52.2387 24.6151C53.1041 25.0786 53.8735 25.4906 54.6909 25.954C57.095 20.7529 59.451 15.6034 61.8071 10.4538C60.9416 9.88732 60.1242 9.47535 59.3068 9.01189ZM14.2053 13.4405C13.6764 12.2561 13.1474 11.1747 12.6666 9.99031C12.0415 8.49693 11.705 6.90056 11.7531 5.25269C11.7531 4.32576 11.8973 3.39884 12.33 2.5749C12.8109 1.59648 13.5321 1.3905 14.4457 1.90546C15.6477 2.5749 16.4171 3.75931 16.8498 5.0982C17.8115 8.13646 16.9941 10.6598 14.9265 12.8226C14.7342 13.0286 14.4938 13.1831 14.2053 13.4405ZM15.9843 23.8427C15.9843 22.2978 16.1767 20.8559 16.5132 19.4141L16.5613 19.517C16.8017 19.826 16.9941 20.135 17.2345 20.3925C19.4463 23.1732 21.7062 25.9025 23.918 28.6833C25.4085 30.5372 26.8991 32.3395 28.005 34.5538C28.8224 36.2017 29.3513 37.9011 29.2071 39.7549C29.159 40.3729 28.9666 40.9908 28.8224 41.5573V41.6088C21.4177 39.5489 15.9843 32.391 15.9843 23.8427ZM33.1498 42.2267C32.1401 42.2267 31.1784 42.1237 30.2168 41.9692L30.2649 41.8148C30.4091 40.9908 30.5534 40.1669 30.6015 39.3944C30.6976 36.9741 29.8321 34.8113 28.6781 32.803C27.4761 30.7431 25.9855 28.9408 24.495 27.1384C22.0908 24.1517 19.7348 21.1134 17.3306 18.1267C17.2826 18.0752 17.1864 17.9207 17.0421 17.6632C19.3982 10.5568 25.7451 5.45867 33.1979 5.45867C39.0159 5.45867 44.1127 8.54842 47.2381 13.286C44.0165 17.1482 40.6988 20.5985 36.3714 22.8643C36.6118 22.0403 36.8522 21.2679 36.9964 20.4955C37.3811 18.3841 37.2369 16.2728 37.0445 14.213C36.9964 13.492 36.9964 12.8226 36.9964 12.1016C36.9964 11.8957 37.0926 11.6897 37.0926 11.5352C37.91 11.6897 38.8236 12.8226 38.9678 13.7495C39.064 14.5219 38.9198 14.9854 38.0062 16.5818C38.3428 16.8908 38.6793 17.1482 38.9678 17.4572C41.1796 15.3459 40.5065 11.2777 37.7177 10.1448C36.8522 9.78433 36.0829 10.1448 35.7944 11.1232C35.4578 12.1531 35.554 13.1831 35.6501 14.2645C35.8425 16.2728 35.9867 18.3326 35.602 20.341C35.5059 20.8044 35.4097 21.3194 35.2174 21.7314C34.3519 23.9457 31.9958 24.3577 30.5053 22.6068C29.6879 21.6799 29.3513 20.4955 29.1109 19.3111C28.8224 17.8177 28.7262 16.2728 29.1109 14.7794C29.736 12.4106 31.9478 11.3292 33.823 12.5136C33.9672 12.6166 34.1115 12.7196 34.3038 12.8741C34.3519 12.3591 34.4481 11.8957 34.4481 11.4322C34.4481 11.3292 34.2557 11.1747 34.1596 11.1232C31.9958 9.99031 29.3513 10.9687 28.2454 13.286C27.5242 14.7794 27.3799 16.3758 27.5242 18.0237C27.6684 19.826 28.0531 21.5769 29.0147 23.1218C29.0147 23.1218 29.0147 23.1732 29.0147 23.3277C25.3604 21.3709 22.3793 18.5386 19.4463 15.5519C19.2539 16.0153 19.0616 16.3758 18.9174 16.7878C18.8693 16.8908 18.9654 17.0967 19.0616 17.1997C20.9368 19.1051 22.9082 20.9074 25.0239 22.5038C26.3221 23.4822 27.6684 24.3062 29.1109 24.9241C30.361 25.4391 31.5631 25.5421 32.9094 25.4391C36.3714 25.1816 39.064 23.2247 41.7085 21.1134C43.8242 19.3626 45.7475 17.3542 47.5266 15.1914C47.6227 15.0884 47.7189 14.9854 47.8631 14.7794C48.392 15.7578 48.8248 16.7363 49.2094 17.8177L48.969 18.1267C48.9209 18.1782 48.9209 18.2296 48.8729 18.2296C47.19 20.3925 45.5071 22.5553 43.7761 24.7696C42.0451 26.9324 40.3142 29.0953 38.6313 31.3096C37.5734 32.7 36.7079 34.2449 36.179 35.9442C35.5059 37.9526 35.3136 40.0124 36.0829 42.1237C35.1693 42.1237 34.1596 42.2267 33.1498 42.2267ZM50.3153 23.8427C50.3153 32.3395 44.882 39.5489 37.5734 41.6088V41.5573C37.0926 40.5274 36.9964 39.4459 37.0926 38.3645C37.333 36.3047 38.1023 34.4508 39.3044 32.803C40.7469 30.7946 42.2855 28.8378 43.8242 26.9324C45.6994 24.5636 47.6227 22.1948 49.4979 19.826C49.546 19.7745 49.5941 19.723 49.6422 19.6715C49.6903 19.62 49.7384 19.517 49.8345 19.4141C50.123 20.8044 50.3153 22.2978 50.3153 23.8427ZM52.3829 12.6166C48.7767 9.83582 48.4401 5.30418 50.7962 2.5749C51.1328 2.21443 51.5655 1.90546 51.9982 1.64798C52.6714 1.339 53.2003 1.54499 53.633 2.16294C54.162 2.93537 54.3543 3.9138 54.4505 4.84072C54.5947 7.15804 53.9215 9.26937 53.008 11.2777C52.8156 11.7412 52.6233 12.1531 52.3829 12.6166Z"
							fill="white" />
					</g>
					<defs>
						<clipPath id="clip0_408_7588">
							<rect width="65" height="44" fill="white" />
						</clipPath>
					</defs>
				</svg>

			</a>

			<div class="header__inner-wrapper">
				<a href="#" class="link like-button header__profile-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 20 20" fill="currentColor">
						<path fill="currentColor"
							d="M19.95 17.138a.781.781 0 0 0-1.53.318.816.816 0 0 1-.166.684.793.793 0 0 1-.625.297H2.371a.794.794 0 0 1-.625-.297.816.816 0 0 1-.166-.684c.811-3.894 4.246-6.739 8.213-6.835a5.275 5.275 0 0 0 .415 0 8.595 8.595 0 0 1 6.94 3.815.781.781 0 1 0 1.299-.87 10.162 10.162 0 0 0-5.266-4.001 5.308 5.308 0 0 0 2.132-4.252A5.319 5.319 0 0 0 10 0a5.319 5.319 0 0 0-5.313 5.313c0 1.738.84 3.284 2.135 4.254-1.187.39-2.3.998-3.274 1.8a10.192 10.192 0 0 0-3.497 5.77A2.372 2.372 0 0 0 2.37 20h15.258a2.372 2.372 0 0 0 2.32-2.862ZM6.25 5.312A3.754 3.754 0 0 1 10 1.563a3.754 3.754 0 0 1 3.75 3.75 3.755 3.755 0 0 1-3.56 3.746 10.257 10.257 0 0 0-.38 0 3.755 3.755 0 0 1-3.56-3.745Z" />
					</svg>
				</a>

				<a href="" class="link like-button  header__money-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 20 20" fill="currentColor">
						<path fill="currentColor"
							d="M9.023 10.43h2.579c.85 0 1.576.486 1.893 1.27a.782.782 0 1 0 1.448-.587 3.586 3.586 0 0 0-3.341-2.246H9.023a2.073 2.073 0 0 1-2.07-2.07v-.781c0-1.142.929-2.07 2.07-2.07h2.5c.862 0 1.563.7 1.563 1.562a.781.781 0 0 0 1.562 0 3.129 3.129 0 0 0-3.125-3.125h-.625V.78a.781.781 0 1 0-1.562 0v1.602h-.313a3.637 3.637 0 0 0-3.632 3.633v.78a3.637 3.637 0 0 0 3.632 3.634ZM14.506 14.352a.781.781 0 0 0-1.014.438c-.308.78-1.033 1.265-1.89 1.265H8.125a1.564 1.564 0 0 1-1.563-1.563.781.781 0 1 0-1.562 0 3.129 3.129 0 0 0 3.125 3.125h1.21v1.602a.781.781 0 0 0 1.563 0v-1.602h.704a3.542 3.542 0 0 0 3.344-2.252.781.781 0 0 0-.44-1.013Z" />
					</svg>
				</a>

				<button class="button consulting-button">Book Consultation</button>
			</div>


		</div>
	</div>
</header>