


// Navbar Meny Toggle
const navHarburger = document.querySelector(".harmbuger ");
const navMenu =  document.querySelector(".menu");


// Toggle Nav

navHarburger.addEventListener("click", () => {
    navMenu.classList.toggle("menu-active");
});



// Check Count Down Availabilty

// Check if the last li contains a span with id "count-remove"
const headerContainer = document.querySelector('#header-container');
const lastLi = document.querySelector('#menu-container  li:last-child');
const NotLastLi = document.querySelector(
	'#menu-container  li:not(:last-of-type)'
);
const countRemoveSpan = lastLi.querySelector("span#count-remove");

if (countRemoveSpan) {

	headerContainer.classList.add('countDownAddedHeader');
	NotLastLi.classList.add('countDownAddedLi');

}


// Page back to top button
const toTopBtn = document.getElementById("to-top-button");

if (toTopBtn) {
    // On scroll event, toggle button visibility based on scroll position
    window.onscroll = function() {
        if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
            toTopBtn.classList.remove("hidden");
        } else {
            toTopBtn.classList.add("hidden");
        }
    };

    // Function to scroll to the top of the page smoothly
    window.goToTop = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
}


// Reading Progres Bar
window.addEventListener('scroll', function () {
	var scrollY = window.pageYOffset || document.documentElement.scrollTop;
	var winHeight = window.innerHeight || document.documentElement.clientHeight;
	var docHeight =
		document.body.scrollHeight || document.documentElement.scrollHeight;
	var scrollPercent = (scrollY / (docHeight - winHeight)) * 100;
	document.querySelector('#readingProgress').style.width =
		scrollPercent + '%';
});





// Initialize Testimonial Slider [Single Post Template]
var Swipes = new Swiper('.swiper', {
	loop: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: true,
	},
	effect: 'fade',
	fadeEffect: { crossFade: true },

	speed: 5000,
	grabCursor: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: 'true',
	},
});

// widget-6_wpdevart_countdown-3

