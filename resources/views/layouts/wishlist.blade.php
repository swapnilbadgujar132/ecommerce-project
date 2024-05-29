@include('frontend.header')

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your CSS styles here */
        .wishlist-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            display: flex;
            align-items: center;
            flex-wrap: wrap; /* Allow items to wrap */
        }

        .wishlist-item:last-child {
            border-bottom: none;
        }

        .wishlist-item img {
            max-width: 100px;
            margin-right: 20px;
            margin-bottom: 10px; /* Add margin bottom to separate image from details */
        }

        .wishlist-item .item-details {
            flex-grow: 1;
            margin-bottom: 10px; /* Add margin bottom to separate details from button */
        }

        .remove-btn {
            background-color: blue;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            flex-shrink: 0; /* Prevent button from shrinking */
        }

        .remove-btn:hover {
            background-color: black;
            color: white;
        }

        /* Media Query for Mobile */
        @media only screen and (max-width: 600px) {
            .wishlist-item img {
                max-width: 80px;
                margin-right: 10px;
            }

            .wishlist-item .item-details {
                flex-grow: 1;
                margin-bottom: 0; /* Remove margin bottom for smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="px-4 px-lg-0">
        <!-- For demo purpose -->
        <!-- End -->

        <div class="">

            @yield('wishlist')
            
        </div>
    </div>

    <button onclick="scrollToTop()" id="scrollButton" title="Go to top">
        <i class="fas fa-long-arrow-alt-up"></i>
    </button>

    <!-- JavaScript files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="js/front.js"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite -
        //   see more here
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
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
