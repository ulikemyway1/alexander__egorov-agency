/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'
import bootstrapBundle from '../../../../resources/js/modules/bootstrap.bundle';
const init = function() {
	const $section = $( this )

	const menuToggleBtn = document.getElementById('menu-toggle');

	const menuToggleBtnText = document.getElementById('main-menu-btn__text');
	const menuToggleBtnIcon = document.getElementById('main-menu-btn__icon');

	const closedMenuIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor">
	<g fill="#fff" clip-path="url(#a)">
		<path
			d="M16.875 0h-2.969a3.129 3.129 0 0 0-3.125 3.125v2.969a3.129 3.129 0 0 0 3.125 3.125h2.969A3.129 3.129 0 0 0 20 6.094V3.125A3.129 3.129 0 0 0 16.875 0Zm1.563 6.094c0 .861-.701 1.562-1.563 1.562h-2.969c-.861 0-1.562-.7-1.562-1.562V3.125c0-.862.7-1.563 1.562-1.563h2.969c.862 0 1.563.701 1.563 1.563v2.969ZM6.094 0H3.125A3.129 3.129 0 0 0 0 3.125v2.969a3.129 3.129 0 0 0 3.125 3.125h2.969a3.129 3.129 0 0 0 3.125-3.125V3.125A3.129 3.129 0 0 0 6.094 0Zm1.562 6.094c0 .861-.7 1.562-1.562 1.562H3.125c-.862 0-1.563-.7-1.563-1.562V3.125c0-.862.701-1.563 1.563-1.563h2.969c.861 0 1.562.701 1.562 1.563v2.969ZM6.094 10.781H3.125A3.129 3.129 0 0 0 0 13.906v2.969A3.129 3.129 0 0 0 3.125 20h2.969a3.129 3.129 0 0 0 3.125-3.125v-2.969a3.129 3.129 0 0 0-3.125-3.125Zm1.562 6.094c0 .862-.7 1.563-1.562 1.563H3.125c-.862 0-1.563-.701-1.563-1.563v-2.969c0-.861.701-1.562 1.563-1.562h2.969c.861 0 1.562.7 1.562 1.562v2.969ZM19.219 16.094a.781.781 0 0 0-.782.781c0 .862-.7 1.563-1.562 1.563h-2.969c-.861 0-1.562-.701-1.562-1.563v-2.969c0-.861.7-1.562 1.562-1.562h2.969c.621 0 1.184.368 1.433.937a.781.781 0 0 0 1.431-.626 3.126 3.126 0 0 0-2.864-1.874h-2.969a3.129 3.129 0 0 0-3.125 3.125v2.969A3.129 3.129 0 0 0 13.906 20h2.969A3.129 3.129 0 0 0 20 16.875a.781.781 0 0 0-.781-.781Z" />
	</g>
	<defs>
		<clipPath id="a">
			<path fill="#fff" d="M0 0h20v20H0z" />
		</clipPath>
	</defs>
</svg>`

	const openedMenuIcon = `<svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	<path d="M11.1049 10.001L19.7712 1.3347C20.0763 1.02958 20.0763 0.534892 19.7712 0.229814C19.4661 -0.0752636 18.9714 -0.0753026 18.6663 0.229814L9.99999 8.89613L1.33372 0.229814C1.0286 -0.0753026 0.533915 -0.0753026 0.228837 0.229814C-0.0762401 0.534931 -0.0762791 1.02962 0.228837 1.3347L8.89511 10.001L0.228837 18.6673C-0.0762791 18.9724 -0.0762791 19.4671 0.228837 19.7722C0.381376 19.9247 0.581337 20.001 0.781297 20.001C0.981258 20.001 1.18118 19.9247 1.33376 19.7722L9.99999 11.1059L18.6663 19.7722C18.8188 19.9247 19.0188 20.001 19.2187 20.001C19.4187 20.001 19.6186 19.9247 19.7712 19.7722C20.0763 19.4671 20.0763 18.9724 19.7712 18.6673L11.1049 10.001Z" fill="white"/>
	</svg>
	
	`

	const mainMenu = new bootstrapBundle.Modal('#main-menu', {
		keyboard: false
	  })
	  

	if (menuToggleBtn && menuToggleBtn instanceof HTMLElement) {
		menuToggleBtn.addEventListener('click', () => {
			if (menuToggleBtnText.textContent === 'Menu') {
				menuToggleBtnText.textContent = 'Close';
				menuToggleBtnIcon.innerHTML = openedMenuIcon;
			} else if (menuToggleBtnText.textContent === 'Close') {
				menuToggleBtnText.textContent = 'Menu';
				menuToggleBtnIcon.innerHTML = closedMenuIcon;
			}
			mainMenu.toggle();
		})
	}
}


initScript( '.header', 'header', init )
