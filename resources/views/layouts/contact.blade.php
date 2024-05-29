



<!DOCTYPE html>
<html>
  <head>
    @include('frontend.header')
    <title>Contact Form</title>
  </head>
  <body>
    <section class="bg-light py-3 py-md-5">
      <div class="container-fluid">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h5 class="fs-6 text-secondary mb-2 text-uppercase text-center">Get in Touch</h5>
            <h5 class="display-5 mb-4 mb-md-5 text-center">We're always on the lookout to work with new clients.</h5>
            <hr class="w-50 mx-auto mb-3 mb-xl-9 border-dark-subtle">
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row justify-content-xl-center">
          <div class="col-12 col-xl-11">
            <div class="bg-white border rounded shadow-sm overflow-hidden">
            
                @yield('contact_form')
              

            </div>
          </div>
        </div>
      </div>
    </section>

    @include('frontend.footer')

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
