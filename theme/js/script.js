    function goToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    const topButton = document.querySelector("#go-to-top");
    topButton.addEventListener("click", goToTop);