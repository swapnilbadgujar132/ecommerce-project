@include('frontend.header')

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body class="">
    <section>
        <div class="container px-4 py-3 px-md-5 text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color:#8793f0">
                        The best offer <br />
                        <span style="color:#3f4373">for your business</span>
                    </h1>
                    <p class="mb-4 " style="color:#3f4373">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>
                <div class="col-lg-6 mb-2 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-dark  text-white">
                        <div class="card-body px-4 py-5 px-md-5">

                            @yield('login_form')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

@include('frontend.footer')