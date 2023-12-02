
// Navbar Meny Toggle

const toggleMenuOpen = document.getElementById('toggleMenuOpen');
const toggleMenuClose = document.getElementById('toggleMenuClose');
const dropDownToggler1 = document.getElementById('dropDownToggler1');
const dropDownToggler2 = document.getElementById('dropDownToggler2');

// Icons
const toggleRightIcon1 = document.getElementById('toggleRightIcon1');
const toggleRightIcon2 = document.getElementById('toggleRightIcon2');
const toggleDownIcon1 = document.getElementById('toggleDownIcon1');
const toggleDownIcon2 = document.getElementById('toggleDownIcon2');


const navMenu = document.getElementById('menus');
const dropdownMenu1 = document.getElementById('dropdownMenu1');
const dropdownMenu2 = document.getElementById('dropdownMenu2');

// // Toggle Nav
toggleMenuOpen.addEventListener('click', () => {
	navMenu.classList.toggle('hidden');
	toggleMenuOpen.classList.toggle('hidden');
	toggleMenuClose.classList.toggle('hidden');
});

toggleMenuClose.addEventListener('click', () => {
	navMenu.classList.toggle('hidden');
	toggleMenuOpen.classList.toggle('hidden');
	toggleMenuClose.classList.toggle('hidden');
});
// Toggling Dropdown Menu
dropDownToggler1.addEventListener('click', () => {
	dropdownMenu1.classList.toggle('hidden');
	toggleDownIcon1.classList.toggle('hidden')
	toggleRightIcon1.classList.toggle('hidden');
});
dropDownToggler2.addEventListener('click', () => {
	dropdownMenu2.classList.toggle('hidden');
		toggleDownIcon2.classList.toggle('hidden');
		toggleRightIcon2.classList.toggle('hidden');
});





// Initialize Testimonial Slider [Testimonial Post Template]
var Swipes = new Swiper('.swiper', {
	loop: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: true,
	},
	effect: 'crossfade',
	grabCursor: true,
	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	speed: 1000,
	navigation: true,
	spaceBetween: 100,
	slidesPerView: 1,
});

// widget-6_wpdevart_countdown-3




// Page back to top button
const toTopBtn = document.getElementById('to-top-button');
const headerAboutNavbar = document.querySelector('#headerAbout');
const headerMainNavbar = document.getElementById('headerMain');

if (toTopBtn ) {
	// On scroll event, handle both functionalities
	window.onscroll = function () {
		// Toggle button visibility based on scroll position
		if (
			document.body.scrollTop > 600 ||
			document.documentElement.scrollTop > 600
		) {
			toTopBtn.classList.remove('hidden');
		} else {
			toTopBtn.classList.add('hidden');
		}

		// Change headerAboutNavbar class based on scroll position
		if (window.scrollY > 200) {
			headerAboutNavbar.classList.add('header-about-scrolled-down');
		
		} else {
			headerAboutNavbar.classList.remove('header-about-scrolled-down');
		
		}
	};

	// Function to scroll to the top of the page smoothly
	window.goToTop = function () {
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		});
	};
}



// About Nav



// const headerMainNavbar = document.querySelector('#headerMain');
// window.onscroll = () => {
// 	if (window.scrollY > 200) {
// 		headerMainNavbar.classList.add('header-main-scrolled-down');
		
// 	} else {

// 		headerMainNavbar.classList.remove('header-main-scrolled-down');
// 	}
// };

