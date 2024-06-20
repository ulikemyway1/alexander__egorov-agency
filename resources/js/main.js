// /**
//  * Internal Dependencies
//  */
import "./modules/swiper-bundle";

import "./modules/hide-preloader";
import "./modules/horizontal-scroll";
import hideFocusOnDesktop from "./modules/hide-focus-on-desktop";
import updateStyleVariables from "./modules/resize-dependent";
import bootstrapBundle from "../js/modules/bootstrap.bundle";
// import before1 from '../images/before-after/before-1.jpg';
// import after1 from '../images/before-after/after-1.jpg';
// import before2 from '../images/before-after/before-2.png';
// import after2 from '../images/before-after/after-2.png';

// import goSportVideo from '../video/go-sport.mp4';

// /**
//  * @typedef options
//  * @see https://developers.google.com/youtube/iframe_api_reference#Loading_a_Video_Player
//  * @param {Number} width
//  * @param {Number} height
//  * @param {String} videoId
//  * @param {Object} playerVars
//  * @param {Object} events
//  */

// /**
//  * @typedef YT.Player
//  * @see https://developers.google.com/youtube/iframe_api_reference
//  * */

// /**
//  * A factory function used to produce an instance of YT.Player and queue function calls and proxy events of the resulting object.
//  *
//  * @param {YT.Player|HTMLElement|String} elementId Either An existing YT.Player instance,
//  * the DOM element or the id of the HTML element where the API will insert an <iframe>.
//  * @param {YouTubePlayer~options} options See `options` (Ignored when using an existing YT.Player instance).
//  * @param {boolean} strictState A flag designating whether or not to wait for
//  * an acceptable state when calling supported functions. Default: `false`.
//  * See `FunctionStateMap.js` for supported functions and acceptable states.
//  * @returns {Object}
//  */

// import YouTubePlayer from 'youtube-player';
// const stateNames = {
// 	'-1': 'unstarted',
// 	0: 'ended',
// 	1: 'playing',
// 	2: 'paused',
// 	3: 'buffering',
// 	5: 'video cued'
// };

// // modal with videos

// const heroVideoModal = document.getElementById('video-y-modal-hero');

// const player1 = YouTubePlayer('player-1', {
// 	videoId: 'HYX6H0zRmbc',
// 	playerVars: { 'autoplay': 1, 'controls': 1 },
// 	height: '766',
//     width: '1362',

// });
// player1.mute();

// if (heroVideoModal && player1) {

// 	heroVideoModal.addEventListener('shown.bs.modal', () => player1.playVideo());

// 	heroVideoModal.addEventListener('hidden.bs.modal', () => player1.pauseVideo());
// }

// // sliders

const admin = function () {
	setTimeout(() => {
		updateStyleVariables();
	}, 2000);
};

const front = function () {
	const $body = $("body");

	$body.removeClass("scroll-off");

	updateStyleVariables();

	// This code block always will be in the end!
	hideFocusOnDesktop();
};

$(function () {
	if (
		$("body").hasClass("wp-admin") ||
		$("body").hasClass("block-editor-iframe__body")
	)
		admin();
	else front();
});

const initMap = () => {};

document.addEventListener("nfFormReady", () => {
	setTimeout(() => {
		const consultForm = document.querySelector(
			".nf-form-wrap form #nf-field-10"
		);

		if (consultForm instanceof HTMLElement) {
			console.log("form");
			consultForm.addEventListener("click", (e) => {
				e.preventDefault();
				console.log("sss");
			});
		}
		const mySubmitController = Marionette.Object.extend({
			initialize: function () {
				this.listenTo(
					Backbone.Radio.channel("forms"),
					"submit:response",
					this.actionSubmit
				);
			},
			actionSubmit: function (response) {
				console.log(response);
			},
		});

		// Instantiate the custom controller
		jQuery(document).ready(function ($) {
			new mySubmitController();
		});

		console.log(mySubmitController);
		console.log(consultForm);
	}, 500);
});

jQuery(document).ready(function () {
	const consultModal = new bootstrapBundle.Modal("#consulting-modal");
	const successModal = new bootstrapBundle.Modal("#success-modal");
	const successModalForForm3 = new bootstrapBundle.Modal(
		"#success-modal-form-3"
	);
	const errorModal = new bootstrapBundle.Modal("#error-modal");
	const bookConsultingBtn = document.querySelector("#book_consulting");
	bookConsultingBtn.addEventListener("click", () => {
		consultModal.show();
	});

	jQuery(document).on("nfFormSubmitResponse", function (event, response, id) {
		if (response.response.data.form_id == "3") {
			const responseText = response?.response?.data?.actions?.success_message;
			const dialogBox = document.querySelector("#success-modal-form-3 .text");
			
            if (dialogBox instanceof HTMLElement) {
				dialogBox.innerHTML = responseText;
			}

			successModalForForm3.show();
		} else {
			consultModal.hide();

			if (!response.response.errors.length > 0) {
				const userMsg = response?.response?.data?.fields["9"]?.value;
			
                if (userMsg === "error") {
					errorModal.show();
				} else {

					const responseText =
						response?.response?.data?.actions?.success_message;
					
                        const dialogBox = document.querySelector("#success-modal .text");
					
                    const messageBox = document.querySelector("#user-msg");
					
                    if (dialogBox instanceof HTMLElement) {
						dialogBox.innerHTML = responseText;
						if (userMsg) messageBox.textContent = `Your message: ${userMsg}`;
					}
					successModal.show();
				}
			} else {
				errorModal.show();
			}
		}
	});
});

// const galleryLeft = document.querySelector('.gallery__part-one-grid');
// const galleryRight = document.querySelector('.gallery__part-two-grid');
// const addMoreBTN = document.getElementById('add-card');
// const addMoreBTN2 = document.getElementById('add-card-2');
// const galleryGRID = document.querySelector('.gallery__grid-wrapper');

// // addMoreBTN.addEventListener('click', () => {
// // 	const card1 = document.createElement('a');
// // 	card1.classList.add('gallery__category');
// // 	card1.id = 'functional';
// // 	card1.innerHTML = `	<div class="gallery__category-info">
// // 	<div class="gallery__category-info_title">Functional<br>Fitness</div>
// // 	<div class="gallery__category-info_count">2 photos</div>
// // </div>`
// // galleryLeft.append(card1);

// // const card2 = document.createElement('a');
// // card2.classList.add('gallery__category');
// // card2.id = 'co-ed';
// // card2.innerHTML = `	<div class="gallery__category-info">
// // <div class="gallery__category-info_title">Functional<br>Fitness</div>
// // <div class="gallery__category-info_count">2 photos</div>
// // </div>`
// // galleryRight.append(card2);

// // 	updateGalleryLayoutLeft();
// // 	updateGalleryLayoutRight();
// // })

// // addMoreBTN2.addEventListener('click', () => {

// // const card2 = document.createElement('a');
// // card2.classList.add('gallery__category');
// // card2.id = 'co-ed';
// // card2.innerHTML = `	<div class="gallery__category-info">
// // <div class="gallery__category-info_title">Functional<br>Fitness</div>
// // <div class="gallery__category-info_count">2 photos</div>
// // </div>`
// // galleryGRID.append(card2);

// // })

// // function updateGalleryLayoutLeft() {
// // 	const gallery = document.querySelector('.gallery__part-one-grid');
// // 	const items = gallery.children;
// // 	const count = items.length;
// // 	const basePattern = 5;
// // 	let patternType = count % basePattern;
// // 	// Reset all items to default
// // 	for (let item of items) {
// // 	  item.style.gridColumn = '';
// // 	  item.style.gridRow = '';
// // 	}

// // 	// Apply styles based on the pattern type
// // 	if (patternType === 0) {
// // 	  // 5n pattern
// // 	  items[0].style.gridRow = 'span 2';
// // 	  if (items.length > 5) {
// // 		console.log('s')
// // 		items[count - 4].style.gridRow = 'span 2';

// // 	  }
// // 	} else if (patternType === 1) {
// // 	  // 5n + 1 pattern
// // 	  items[0].style.gridRow = 'span 2';
// // 	  if (count - 1 < 5)
// // 	  items[count - 1].style.gridColumn = 'span 2';
// // 	  if (items.length > 10) {

// // 		items[count - 2].style.gridRow = 'span 2';
// // 	  }
// // 	} else if (patternType === 2) {
// // 	  // 5n + 2 pattern
// // 	  items[0].style.gridRow = 'span 2';
// // 	  // No additional styles needed for last 2 items
// // 	} else if (patternType === 3) {
// // 	  // 5n + 3 pattern
// // 	  items[0].style.gridRow = 'span 2';
// // 	  items[count - 3].style.gridRow = 'span 2';
// // 	  // The other two items follow the default style
// // 	} else if (patternType === 4) {
// // 	  // 5n + 4 pattern
// // 	//   items[0].style.gridRow = 'span 2';
// // 	items[count - 4].style.gridRow = 'span 2';
// // 	  // The additional items follow the default style
// // 	}
// //   }

// //   function updateGalleryLayoutRight() {
// // 	const gallery = document.querySelector('.gallery__part-two-grid');
// // 	const items = gallery.children;
// // 	const count = items.length;
// // 	const basePattern = 4;
// // 	let patternType = count % basePattern;

// // 	// Reset all items to default
// // 	for (let item of items) {
// // 	  item.style.gridColumn = '';
// // 	  item.style.gridRow = '';
// // 	}

// // 	// Apply styles based on the pattern type
// // 	if (patternType === 0) {
// // 	  // 5n pattern
// // 	  items[0].style.gridColumn = 'span 2';
// // 	  if (items.length > 4) {
// // 		console.log('s')
// // 		items[count - 2].style.gridColumn = 'span 2';
// // 	  }
// // 	} else if (patternType === 1 && count > 4) {
// // 		items[count - 3].style.gridColumn = 'span 2';
// // 	} else if  (patternType === 3) {
// // 	  // 5n + 3 pattern
// // 	  items[0].style.gridColumn = 'span 2';
// // 	  items[count - 2].style.gridColumn = 'span 2';
// // 	  // The other two items follow the default style
// // 	}
// //   }

// //   // Run the function to update the layout
// //   updateGalleryLayoutLeft();
// //   updateGalleryLayoutRight()

// //   // Optionally, run the function whenever new items are added or the window is resized
// //   window.addEventListener('resize', () => {
// // 	updateGalleryLayoutLeft();
// // 	updateGalleryLayoutRight();
// //   });
//   // MutationObserver could be used to observe when children are added to the gallery
