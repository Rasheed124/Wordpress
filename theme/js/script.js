function goToTop() {
	window.scrollTo({
	top: 0,
	behavior: 'smooth'
	});
}

const topButton = document.querySelector("#go-to-top");
	  topButton.addEventListener("click", goToTop);


   // eslint-disable-next-line no-undef
   $('#testimonial-carousel').owlCarousel({
    items: 1,
		margin: 5,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
    smartSpeed: 800,
    loop: true,
    nav:false,

	});


