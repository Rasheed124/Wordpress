    function goToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    const topButton = document.querySelector("#go-to-top");
    topButton.addEventListener("click", goToTop);

    $(document).ready(function () {
		// $('#owl-demo').owlCarousel({
		// 	navigation: true, // Show next and prev buttons
		// 	slideSpeed: 300,
		// 	paginationSpeed: 400,
		// 	singleItem: true,
		// });


        $('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true,
				},
			
			},
		});
	});

