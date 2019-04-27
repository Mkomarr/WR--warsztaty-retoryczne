/*--------- dropdownMenu -----------*/

const icon = document.querySelector('.dropdown-icon');
const menu = document.querySelector('.top-menu')
const hideMenu = document.querySelectorAll('.desktopMenu')

icon.addEventListener('click', () => {
    if (menu.className === 'top-menu') {
     menu.className = 'top-menu-visible';
     icon.textContent = "X";
    } else {
     menu.className = 'top-menu';
     icon.innerHTML = `&#9776;`;
    }
});

/*------- close menu ----------*/

hideMenu.forEach(singleLi => singleLi.addEventListener('click', () => {
    menu.className = 'top-menu';
}))
