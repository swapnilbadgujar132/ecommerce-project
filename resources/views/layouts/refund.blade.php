@include('frontend.header')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refund & Return Policy</title>
  <!-- Include your CSS files here -->
</head>
<body>

<div class="container">
  <h1>Refund & Return Policy</h1>
  <p>Welcome to our online store! PrintProArtistry provides our services to you subject to the following conditions. Please read them carefully.</p>

   @yield('refund_policy')

</div>

<footer>
  <!-- Include your footer content here -->
</footer>

<button onclick="scrollToTop()" id="scrollButton" title="Go to top">
  <i class="fas fa-long-arrow-alt-up"></i>
</button>

<!-- Include your JavaScript files here -->

<!-- FontAwesome CSS -->
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

    window.addEventListener("scroll", function() {
      if (window.pageYOffset > 10) {
        scrollButton.style.display = "block";
      } else {
        scrollButton.style.display = "none";
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