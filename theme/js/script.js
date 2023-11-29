// Navbar Meny Toggle
// const navHarburger = document.querySelector('.harmbuger ');
// const navMenu = document.querySelector('.menu');

// // Toggle Nav

// navHarburger.addEventListener('click', () => {
// 	navMenu.classList.toggle('menu-active');
// });

// Check Count Down Availabilty



// Page back to top button
const toTopBtn = document.getElementById('to-top-button');

if (toTopBtn) {
	// On scroll event, toggle button visibility based on scroll position
	window.onscroll = function () {
		if (
			document.body.scrollTop > 600 ||
			document.documentElement.scrollTop > 600
		) {
			toTopBtn.classList.remove('hidden');
		} else {
			toTopBtn.classList.add('hidden');
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
