@include('frontend.header')
<!DOCTYPE html>
<html>

<body>

<!-- Service 1 - Bootstrap Brain Component -->
<section class="py-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Services</h2>
        <p class="text-secondary mb-5 text-center">We have a team of experienced and talented professionals who can help you with every aspect of the product development process, from ideation to prototyping to launch.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>
  
  @yield('services')
 
</section>
  
<footer>
  <p>Footer content goes here.</p>
</footer>

<button onclick="scrollToTop()" id="scrollButton" title="Go to top">
  <i class="fas fa-long-arrow-alt-up"></i>
</button>

<!-- JavaScript files-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="js/front.js"></script>

<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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