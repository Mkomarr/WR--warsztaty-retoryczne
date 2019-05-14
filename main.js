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

	//btn see-courses
	$('#see-courses-1').click (function (event){
		event.preventDefault();
		let goTop = $('#kursy').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
	});

	//btn contact-us
	$('#contact-us').click (function (event){
		event.preventDefault();
		let goTop = $('#kontakt').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
	});

	//sign-in offer
	$('#sign-in-link').click (function (event){
		event.preventDefault();
		let goTop = $('#kontakt').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
	});

	//btn see-courses-2
	$('#see-courses-2').click (function (event){
		event.preventDefault();
		let goTop = $('#kursy').offset().top-150;
		$("html, body").animate({
			scrollTop: goTop
		}, 500);
	});

});

/* --- collapsible ----*/

// basic
const collapse = document.querySelector('.li-basic');
const basicDetails = document.querySelector('.basic-details');

const showBasicDetails = () => {
	basicDetails.classList.toggle('collapse-visible');
}
collapse.addEventListener('click', showBasicDetails);

// advanced
const advancedBtn = document.querySelector('.li-advanced');
const advancedDetails = document.querySelector('.advanced-details');

const showAdvDetails = () => {
	advancedDetails.classList.toggle('collapse-visible');
}
advancedBtn.addEventListener('click', showAdvDetails);

//for-companies
const compBtn = document.querySelector('.li-companies');
const forCompaniesDetails = document.querySelector('.for-companies');

const showCompDetails = () => {
	forCompaniesDetails.classList.toggle('collapse-visible');
}
compBtn.addEventListener('click', showCompDetails);

// for IT
const ItBtn = document.querySelector('.li-IT');
const ItDetails = document.querySelector('.IT-details');

const showItDetails = () => {
	ItDetails.classList.toggle('collapse-visible');
}
ItBtn.addEventListener('click', showItDetails);

// one-to-one
const oneToOneBtn = document.querySelector('.li-one-to-one');
const oneToOneDetails = document.querySelector('.one-to-one');

const showOneToOneDetails = () => {
	oneToOneDetails.classList.toggle('collapse-visible');
}
oneToOneBtn.addEventListener('click', showOneToOneDetails);

/* ---- testimonial slider ---- */

const carousel = document.querySelector('.carousel');
const leftArrow = document.querySelector('.left-arrow')
const rightArrow = document.querySelector('.right-arrow')

let sectionIndex = 0;

rightArrow.addEventListener('click', function() {
	sectionIndex = (sectionIndex < 9) ? sectionIndex + 1 : 0;
	carousel.style.transform = 'translate(' + (sectionIndex) * -10 + '%)';
})
leftArrow.addEventListener('click', function() {
	sectionIndex = (sectionIndex > 0) ? sectionIndex - 1 : 9;
	carousel.style.transform = 'translate(' + (sectionIndex) * -10 + '%)';
})

