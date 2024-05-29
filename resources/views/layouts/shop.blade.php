<!DOCTYPE html>
<html>
<head>
    @include('frontend.header')
   <title>Page Title</title>
</head>
<body>
<div class="page-holder overflow-hidden">
    <!-- navbar-->
    <div class="">
        <!-- container -->
        <section class="bg-light">
            <div class="">
                <!-- container -->
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0">Shop</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--  -->

    <section class="container-fluid py-5">
         <div class="row">
            @yield('sidebar')

             @yield('products')           
            
         </div>
    </section>


</div>

@include('frontend.footer')

<!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="scrollButton" title="Go to top">
    <i class="fas fa-long-arrow-alt-up"></i>
</button>
<!-- JavaScript files-->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="js/front.js"></script>
<!-- Nouislider Config-->
<script>
    var range = document.getElementById('range');
    noUiSlider.create(range, {
        range: {
            'min': 0,
            'max': 2000
        },
        step: 5,
        start: [100, 1000],
        margin: 300,
        connect: true,
        direction: 'ltr',
        orientation: 'horizontal',
        behaviour: 'tap-drag',
        tooltips: true,
        format: {
            to: function ( value ) {
                return '$' + value;
            },
            from: function ( value ) {
                return value.replace('', '');
            }
        }
    });
</script>
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<!-- JavaScript to handle scrolling -->
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
