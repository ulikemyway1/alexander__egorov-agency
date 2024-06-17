/**
 * Internal Dependencies
 */

import { initScript } from "../../../../resources/js/utils/init-script";
import fattyVideo from "../../../../resources/video/fatty.mp4";
import plankVideo from "../../../../resources/video/plank.mp4";
import squatVideo from "../../../../resources/video/squat.mp4";

const modals = {
	fatty: [fattyVideo, "#video-e-2", "#modal-e-2"],
	plank: [plankVideo, "#video-e-3", "#modal-e-3"],
	squat: [squatVideo, "#video-e-4", "#modal-e-4"],
};

function modalVideoInit(videoSrc, videoSelector, modalSelector) {
	const videoElement = document.querySelector(videoSelector);
	const modal = document.querySelector(modalSelector);

	if (videoSrc && videoSelector && modal) {
		if (videoElement instanceof HTMLVideoElement) {
			videoElement.src = videoSrc;
			videoElement.muted = true;
		}

		modal.addEventListener("shown.bs.modal", () => {
			if (videoElement instanceof HTMLVideoElement) {
				videoElement.play();
			}
		});

		modal.addEventListener("hidden.bs.modal", () => {
			if (videoElement instanceof HTMLVideoElement) videoElement.pause();
		});
	}
}

document.addEventListener("DOMContentLoaded", () => {
	Object.values(modals).forEach((modalInfoSet) =>
		modalVideoInit(...modalInfoSet)
	);
});



const init = function () {
	const $section = $(this);
};

initScript(".section-testimonials", "testimonials", init);
