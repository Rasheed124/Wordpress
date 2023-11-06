
const header = document.querySelector("header");
const hamburgerBtn = document.querySelector(".open-menu");
const closeMenuBtn = document.querySelector(".close-menu");
const headerOverlay = document.querySelector(".header.show-mobile-menu::before");

// Toggle mobile menu on hamburger button click
hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

// Close mobile menu on close button click
closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
// Close mobile menu on close button click
headerOverlay.addEventListener("click", () => hamburgerBtn.click());





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



window.addEventListener("scroll", function() {
    var scrollY = window.pageYOffset || document.documentElement.scrollTop;
    var winHeight = window.innerHeight || document.documentElement.clientHeight;
    var docHeight = document.body.scrollHeight || document.documentElement.scrollHeight;
    var scrollPercent = (scrollY / (docHeight - winHeight)) * 100;
    document.querySelector("#readingProgress").style.width = scrollPercent + "%";
});





 
(function ($) {
	'use strict';

	$(document).ready(function () {
	   $('#testimonial-carousel').owlCarousel({
			loop: true,
            items: 1,
			margin: 10,
			responsiveClass: true,
		
			nav: true,
			// navText: [
			// 	'&amp;amp;lt;i class="fa fa-arrow-left fa-2x"&amp;amp;gt;&amp;amp;lt;/i&amp;amp;gt;',
			// 	'&amp;amp;lt;i class="fa fa-arrow-right fa-2x"&amp;amp;gt;&amp;amp;lt;/i&amp;amp;gt;',
			// ], //Note, if you are not using Font Awesome in your theme, you can change this to Previous &amp;amp;amp; Next
		
		});
	});
})(jQuery);