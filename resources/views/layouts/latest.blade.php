<!DOCTYPE html>
<html>
<head>
    @include('frontend.header')

  <title>Latest Products</title>
  <!-- Add your CSS links here -->

</head>
<body>
  <div class="page-holder ">
    <!-- Navbar -->
    <!-- Modal -->
    <div class="container">
        <h2 class="h5 text-uppercase mb-4">Latest Products</h2>

      @yield('product')
      
    </div>

    @include('frontend.footer')

    <!-- End Container -->
    <!-- Add your footer here -->
    <button onclick="scrollToTop()" id="scrollButton" title="Go to top">
      <i class="fas fa-long-arrow-alt-up"></i>
    </button>
  </div>
  <!-- JavaScript files -->
  <!-- Add your JavaScript links here -->
</body>
</html>

