/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script';

const init = function() {
	const $section = $( this );

	function togglePopUp(id) {
		const popup = document.getElementById(id);
		const gallery = document.querySelector('.gallery');
		if (popup && gallery) {
			if (popup.classList.contains('hidden')) {
				popup.classList.remove('hidden');
				gallery.classList.add('blocked');
			} else {
				popup.classList.add('hidden');
				gallery.classList.remove('blocked');
			}
		}
	}

	const menu = document.querySelector('.hero__nav_ol');

	const menuItems = menu.querySelectorAll('.hero__nav_li');

	menu.addEventListener('click', (e) => {
		e.preventDefault();
		const link = e.target;
		if (link instanceof HTMLElement) {
			const li = link.closest('.hero__nav_li');
			console.log(li)
			if (li) {
				menuItems.forEach((menuItem) => menuItem.classList.remove('active'));
			li.classList.add('active')
			}
		}
	})
}



initScript( '.section-hero', 'hero', init )
