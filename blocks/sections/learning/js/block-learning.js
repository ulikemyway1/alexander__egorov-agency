/**
 * Internal Dependencies
 */
import { initScript } from "../../../../resources/js/utils/init-script";
import Swiper from "../../../../resources/js/modules/swiper-bundle";
import learningVideo1 from "../../../../resources/video/learningVideo1.mp4";
import learningVideo2 from "../../../../resources/video/learningVideo2.mp4";
import learningVideo3 from "../../../../resources/video/learningVideo3.mp4";
const init = function () {
	const $section = $(this);
};

document.addEventListener("DOMContentLoaded", () => {
	const learningSmallSlider = new Swiper(".swiper.learning-small", {
		direction: "horizontal",
		loop: true,
		allowTouchMove: false,
		slidesPerView: "2",
	});

	const learningHugeSlider = new Swiper(".swiper.learning-huge", {
		direction: "horizontal",
		loop: true,
		allowTouchMove: true,
		slidesPerView: "1",

		pagination: {
			el: ".swiper-pagination.learning-huge",
			clickable: true,
		},

		// Navigation arrows
		navigation: {
			nextEl: ".swiper-button-next.learning-huge",
			prevEl: ".swiper-button-prev.learning-huge",
		},

		controller: {
			control: learningSmallSlider,
		},
	});

	const learningVideo1Player = document.querySelectorAll(".video-learning-1");
	const learningVideo2Player = document.querySelectorAll(".video-learning-2");
	const learningVideo3Player = document.querySelectorAll(".video-learning-3");

	function setSrc(videoElement, src) {
		if (videoElement instanceof HTMLVideoElement) {
			videoElement.src = src;
		}
	}

	learningVideo1Player.forEach((videoElement) => {
		setSrc(videoElement, learningVideo1);
	});

	learningVideo2Player.forEach((videoElement) => {
		setSrc(videoElement, learningVideo2);
	});

	learningVideo3Player.forEach((videoElement) => {
		setSrc(videoElement, learningVideo3);
	});

	const playVideoBtn = document.querySelector(".play-video-btn");
	const stopVideoBtn = document.querySelector(".stop-video-btn");

	if (playVideoBtn) {
		playVideoBtn.addEventListener("click", () => {
			const currentIndex = learningHugeSlider.activeIndex;
			const targetPlayer = document.querySelector(
				`.learning-huge .video-learning-${currentIndex + 1}`
			);
			const targetOverlay = document.querySelector(
				`.learning-huge .video-learning-${currentIndex + 1} + .slide-overlay`
			);
			console.log(targetOverlay);
			if (targetPlayer instanceof HTMLVideoElement) {
				if (!targetPlayer.classList.contains("playing")) {
					targetPlayer.play();
					targetPlayer.classList.add("playing");
					targetOverlay.classList.add("vs-hidden");
					playVideoBtn.classList.add("vs-removed");
					stopVideoBtn.classList.remove("vs-removed");
				} else {
					targetPlayer.pause();
					targetPlayer.classList.remove("playing");
					targetOverlay.classList.remove("vs-hidden");
					playVideoBtn.classList.remove("vs-removed");
					stopVideoBtn.classList.add("vs-removed");
				}
			}
		});
	}

	if (stopVideoBtn) {
		stopVideoBtn.addEventListener("click", () => {
			const currentIndex = learningHugeSlider.activeIndex;
			const targetPlayer = document.querySelector(
				`.learning-huge .video-learning-${currentIndex + 1}`
			);
			const targetOverlay = document.querySelector(
				`.learning-huge .video-learning-${currentIndex + 1} + .slide-overlay`
			);
			console.log(targetOverlay);
			if (targetPlayer instanceof HTMLVideoElement) {
				if (targetPlayer.classList.contains("playing")) {
					targetPlayer.pause();
					targetPlayer.classList.remove("playing");
					targetOverlay.classList.remove("vs-hidden");
					playVideoBtn.classList.remove("vs-removed");
					stopVideoBtn.classList.add("vs-removed");
				}
			}
		});
	}

	learningHugeSlider.on("activeIndexChange", () => {
		const currentIndex = learningHugeSlider.activeIndex;
		const targetPlayer = document.querySelector(
			`.learning-huge .video-learning-${currentIndex}`
		);

		if (targetPlayer instanceof HTMLVideoElement) {
			if (targetPlayer.classList.contains("playing")) {
				targetPlayer.pause();
				targetPlayer.classList.remove("playing");
				targetOverlay.classList.remove("vs-hidden");
				playVideoBtn.classList.remove("vs-removed");
				stopVideoBtn.classList.add("vs-removed");
			}
		}
	});
});
initScript(".section-learning", "learning", init);
