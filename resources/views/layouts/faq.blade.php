@include('frontend.header')

<!DOCTYPE html>
<html lang="en">
<body>

<!-- FAQ Section -->
<section class="faq-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Frequently Asked Questions</h2>
        <p class="text-secondary text-center lead fs-4">Welcome to our FAQ page, your one-stop resource for answers to commonly asked questions.</p>
        <p class="mb-5 text-center">Whether you're a new customer looking to learn more about what we offer or a long-time user seeking clarification on specific topics, this page has clear and concise information about our products and services.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
    
    <!-- FAQ Cards -->
    <div class="row">
      <!-- Your Account -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Your Account</h5>
            <p class="card-text">Find answers related to your account.</p>
            {{-- <a href="#yourAccount" class="btn btn-primary stretched-link">Read More</a> --}}
          </div>
        </div>
      </div>
      <!-- Placing an Order -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Placing an Order</h5>
            <p class="card-text">Learn about placing orders with us.</p>
            {{-- <a href="#placingOrder" class="btn btn-primary stretched-link">Read More</a> --}}
          </div>
        </div>
      </div>
      <!-- Refunds and Exchanges -->
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Refunds and Exchanges</h5>
            <p class="card-text">Find out about our refund and exchange policies.</p>
            {{-- <a href="#refundsExchanges" class="btn btn-primary stretched-link">Read More</a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Content -->
<section id="faqContent" class="faq-content">
  <div class="container">
    <!-- Your Account FAQ -->
    
      
      @yield('faq')

    <!-- Add more FAQ categories here -->
  </div>
</section>

<!-- Bootstrap Bundle with Popper -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome Script -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Your Custom Script -->
<script src="js/script.js"></script>

</body>
</html>

@include('frontend.footer')

