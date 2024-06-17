/**
 * Internal Dependencies
 */
import Swiper  from "../../../../resources/js/modules/swiper-bundle";
import { initScript } from "../../../../resources/js/utils/init-script";

document.addEventListener("DOMContentLoaded", () => {

	const galleryPersonalModal = document.getElementById(
		"gallery-personal-modal"
	);

	if (galleryPersonalModal) {

		galleryPersonalModal.addEventListener("shown.bs.modal", () => {

			const swiperGallery = new Swiper(".swiper.gallery-slider", {
				direction: "horizontal",
				loop: true,
				pagination: {
					el: ".swiper-pagination.gallery-slider",
					clickable: true,
				},

				// Navigation arrows
				navigation: {
					nextEl: ".swiper-button-next.gallery-slider",
					prevEl: ".swiper-button-prev.gallery-slider",
				},
			});

			setTimeout(function () {
				swiperGallery.update();
			}, 0);
			
		});
	}
});

const init = function () {
	const $section = $(this);
};

initScript(".section-gallery", "gallery", init);
