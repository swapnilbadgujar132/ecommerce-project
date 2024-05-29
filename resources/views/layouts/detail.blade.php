@include('frontend.header')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Details</title>
</head>

<body>
  <div class="page-holder bg-light">
    <section class="py-5">
      <div class="container">
        @yield('product_detail')

       



        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
          <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a></li>
        </ul>

        @yield('description')

       

        <!-- RELATED PRODUCTS-->
        <h2 class="h5 text-uppercase mb-4">Related products</h2>
        @yield('related_products')

      

      </div>
    </section>

    <footer>
      <!-- Footer content here -->
    </footer>

    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </div>

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

