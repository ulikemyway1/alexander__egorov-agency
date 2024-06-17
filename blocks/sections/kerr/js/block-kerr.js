/**
 * Internal Dependencies
 */
import { initScript } from "../../../../resources/js/utils/init-script";
import Swiper from "../../../../resources/js/modules/swiper-bundle";
import SliderBar from "../../../../resources/js/modules/slideBar";
import before1 from "../../../../resources/images/before-after/before-1.jpg";
import after1 from "../../../../resources/images/before-after/after-1.jpg";
import before2 from "../../../../resources/images/before-after/before-2.png";
import after2 from "../../../../resources/images/before-after/after-2.png";

document.addEventListener("DOMContentLoaded", () => {
	const swiperKerr = new Swiper(".swiper.kerr", {
		// Optional parameters
		direction: "horizontal",
		loop: true,

		// If we need pagination
		pagination: {
			el: ".swiper-pagination.kerr",
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next.kerr",
			prevEl: ".swiper-button-prev.kerr",
		},
	});

	const beforeAfter1 = new SliderBar({
		el: "#before-after-first",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter2 = new SliderBar({
		el: "#before-after-second",
		beforeImg: before2,
		afterImg: after2,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});
	const beforeAfter3 = new SliderBar({
		el: "#before-after-third",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter4 = new SliderBar({
		el: "#before-after-fourth",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter5 = new SliderBar({
		el: "#before-after-fifth",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter6 = new SliderBar({
		el: "#before-after-sixth",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter7 = new SliderBar({
		el: "#before-after-seventh",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter8 = new SliderBar({
		el: "#before-after-eight",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const beforeAfter9 = new SliderBar({
		el: "#before-after-ninth",
		beforeImg: before1,
		afterImg: after1,
		height: "auto", // slide-wrap height, default image-height
		line: true, // Dividing line, default true
		lineColor: "#ffffff",
	});

	const swiperBeforeAfterPhoto = new Swiper(".swiper.before-after-photo", {
		direction: "horizontal",
		loop: true,
		allowTouchMove: false,
		slidesPerView: "3",
		centeredSlides: true,
	});

	const swiperBeforeAfterDescr = new Swiper(
		".swiper.before-after-description",
		{
			// Optional parameters
			direction: "horizontal",
			loop: true,

			// If we need pagination
			pagination: {
				el: ".swiper-pagination.before-after-description",
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".swiper-button-next.before-after-description",
				prevEl: ".swiper-button-prev.before-after-description",
			},

			controller: {
				control: swiperBeforeAfterPhoto,
			},
		}
	);
});

const init = function () {
	const $section = $(this);
};

initScript(".section-kerr", "kerr", init);
