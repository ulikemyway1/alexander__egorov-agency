/**
 * Internal Dependencies
 */
import { initScript } from "../../../../resources/js/utils/init-script";

const init = function () {
	const $section = $(this);

	function togglePopUp(id) {
		const popup = document.getElementById(id);
		const gallery = document.querySelector(".gallery");
		if (popup && gallery) {
			if (popup.classList.contains("hidden")) {
				popup.classList.remove("hidden");
				gallery.classList.add("blocked");
			} else {
				popup.classList.add("hidden");
				gallery.classList.remove("blocked");
			}
		}
	}

	// Hero Menu
	const heroMenu = document.querySelector(".hero-menu__nav_ol");
	const heroMenuItems = document.querySelectorAll(".hero-menu__nav_li");
	heroMenu.addEventListener("click", (e) => {
		e.preventDefault();
		const link = e.target;
		if (link instanceof HTMLElement) {
			const li = link.closest(".hero-menu__nav_li");
			if (li) {
				heroMenuItems.forEach((menuItem) =>
					menuItem.classList.remove("active")
				);
				li.classList.add("active");
			}
		}
	});

	// Popup menu
	const popupMenu = document.querySelector(".popup-menu__nav_ol");

	const popupMenuItems = document.querySelectorAll(".popup-menu__nav_li");

	popupMenu.addEventListener("click", (e) => {
		e.preventDefault();
		const link = e.target;
		if (link instanceof HTMLElement) {
			const li = link.closest(".popup-menu__nav_li");
			if (li) {
				popupMenuItems.forEach((menuItem) =>
					menuItem.classList.remove("active")
				);
				li.classList.add("active");
			}
		}
	});



	
};

initScript(".section-hero", "hero", init);
