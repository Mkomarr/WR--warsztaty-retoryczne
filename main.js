/*---------------------- dropdownMenu -------------------------*/

const icon = document.querySelector('.dropdown-icon');
const menu = document.querySelector('.top-menu')
const hideMenu = document.querySelectorAll('.desktopMenu')

icon.addEventListener('click', () => {
	menu.className = 'top-menu-visible';
});

/*------- close menu ----------*/

hideMenu.forEach(singleLi => singleLi.addEventListener('click', () => {
    menu.className = 'menu';
}))