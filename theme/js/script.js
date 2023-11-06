
const navHarburger = document.querySelector(".harmbuger ");
const navMenu =  document.querySelector(".menu");

// Toggle Nav

navHarburger.addEventListener("click", () => {
    navMenu.classList.toggle("menu-active");

  console.log("hello");
});




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





 
  /**
   * Owl carousel
   */

	/*--/  Facilities owl /--*/
   $('#testimonial-carousel').owlCarousel({
    items: 1,
		margin: 5,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
    smartSpeed: 800,
    loop: true,
    nav:true,
 
	});
  $( "#testimonial-carousel .owl-prev").html('<i class="fa fa-chevron-left"></i>');
  $( "#testimonial-carousel .owl-next").html('<i class="fa fa-chevron-right"></i>');
