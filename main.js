/*--------- dropdownMenu -----------*/

const icon = document.querySelector('.dropdown-icon');
const menu = document.querySelector('.top-menu')
const hideMenu = document.querySelectorAll('.top-menu')

icon.addEventListener('click', () => {
    if (menu.className === 'top-menu') {
     menu.className = 'top-menu visible';
     icon.textContent = "X";
    } else {
     menu.className = 'top-menu';
     icon.innerHTML = `&#9776;`;
    }
});

/*------- close menu ----------*/

hideMenu.forEach(singleLi => singleLi.addEventListener('click', () => {
    menu.className = 'top-menu';
    icon.innerHTML = `&#9776;`;
}));


/*----------- scrolllTo----------------*/

$().ready (function () {
	let windowWidth = $(window).width();

	$('#kursy-nav').click (function (event){
		event.preventDefault();
		let goTop = $('#kursy').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
    });

	$('#kontakt-nav').click (function (event){
		event.preventDefault();
		let goTop = $('#kontakt').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
    });

	$('#top-logo').click (function (event){
		event.preventDefault();
		let goTop = $('#top').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
    });


});


