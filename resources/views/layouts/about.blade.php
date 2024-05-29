@include('frontend.header')

<!DOCTYPE html>
<html>
  <head>
    <title>About Us</title>
  </head>
  <body>

    <!-- About Us Section Start-->
    @yield('about')
    <!-- About Us Section End -->

    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <button onclick="scrollToTop()" id="scrollButton" title="Go to top">
      <i class="fas fa-long-arrow-alt-up"></i>
    </button>

    <script>
      function scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: "auto"
        });
      }
      document.addEventListener("DOMContentLoaded", function() {
        const scrollButton = document.getElementById("scrollButton");

        // Show or hide the button based on the scroll position
        window.addEventListener("scroll", function() {
          if (window.pageYOffset > 10) { // Change the value as needed
            scrollButton.style.display = "block"; // Show the button if scrolled down
          } else {
            scrollButton.style.display = "none"; // Hide the button if at the top
          }
        });

        scrollButton.addEventListener("click", function(event) {
          event.stopPropagation();
        });
      });
    </script>
  </body>
</html>


@include('frontend.footer')
