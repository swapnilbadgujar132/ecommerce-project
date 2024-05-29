<!DOCTYPE html>
<html lang="en">
<head>
    
 
  <title>Document</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
   <!-- set ahe pan mala acces krtoy tar tevha return index var -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <link rel="stylesheet" href="{{url('frontend/vendor/glightbox/css/glightbox.min.css')}}">
    <!-- Range slider-->
    <link rel="stylesheet" href="{{url('frontend/vendor/nouislider/nouislider.min.css')}} ">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{url('frontend/vendor/choices.js/public/assets/styles/choices.min.css')}} ">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{url('frontend/vendor/swiper/swiper-bundle.min.css')}} ">
    <!-- Google fonts-->
    <link rel="stylesheet" href=" https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{url('frontend/css/style.default.css')}}  " id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{url('frontend/css/custom.css')}} ">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{url('frontend/img/favicon.png')}} ">

    {{--  --}}
    <script src="{{url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"> </script>
    <script src="{{url('frontend/vendor/glightbox/js/glightbox.min.js')}}"> </script>
    <script src="{{url('frontend/vendor/nouislider/nouislider.min.js')}}"> </script>
    <script src="{{url('frontend/vendor/swiper/swiper-bundle.min.js')}}"> </script>
    <script src="{{url('frontend/vendor/choices.js/public/assets/scripts/choices.min.js')}}"> </script>
    <script src="{{url('frontend/js/front.js')}}"></script>

</head>
<body>


<section class="bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="h3  mb-0">
                    <marquee width="100%" direction="left" height="100%">
                     <b class="text-uppercase"> Weekend Extravaganza: Unbeatable T-Shirt Deals!</b>
                      Make the most of your weekend with our T-shirt extravaganza. Enjoy unbeatable deals and refresh your wardrobe today!
                    </marquee>
                </h1>
            </div>
            <div class="col-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end mb-0 px-0 bg-dark">
                        <li class="breadcrumb-item">
                            <a class="text-dark px-1 h5" target="_blank" href="""><i class="fab fa-instagram text-light"></i></a>
                            <a class="text-dark px-1 h5" target="_blank" href=""><i class="fab fa-telegram text-light"></i></a>
                            <a class="text-dark px-1 h5" target="_blank" href=""><i class="fab fa-facebook text-light"></i></a>
                            <a class="text-dark px-1 h5" target="_blank" href=""><i class="fab fa-pinterest-square text-light"></i></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>



<header class="header bg-white">
        <div class="px-lg-3">
          <!-- container -->
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{url('index')}}"><span class="fw-bold text-uppercase text-dark">
            <img src="{{asset('frontend/img/logo/good_2.png')}}" alt="" style="height: 60px;width:160px;">
          </span></a>
           
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
             
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('index.index') ? 'active' : '' }}" href="{{route('index.index')}}">Home</a></li>
                 
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('all') ? 'active' : '' }}" href="{{route('all')}}">Shop</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('latest.index') ? 'active' : '' }}" href="{{route('latest.index')}}">Latest</a></li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}" href="{{route('contact.index')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('about.index') ? 'active' : '' }}" href="{{route('about.index')}}">About</a></li>
                </ul>




              <ul class="navbar-nav ms-auto"> 
              
                @if (session()->has('id'))
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('wishlist.index') ? 'active' : '' }}" href="{{route('wishlist.index',['user_id'=> session()->get('id')] )}}"> <i class="far fa-heart me-1"></i><small class="text-gray fw-normal">WishList</small></a></li>
                @else
                
                
                @endif
               
            
               {{-- {{route('login.index')}} --}}
                    
               @if (session()->has('id'))
               <li class="nav-item"><a class="nav-link  {{ request()->routeIs('logout.index') ? 'active' : '' }}" href="{{route('logout.index')}}"><i class="fas fa-sign-out-alt"></i>logout</a></li>
               @else
               <li class="nav-item"><a class="nav-link {{ request()->routeIs('newuser.index') ? 'active' : '' }}" href="{{route('newuser.index')}}"><i class="fas fa-user-plus"></i>New User</a></li>
               <li class="nav-item"><a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{route('login')}}"><i class="fa fa-right-to-bracket"></i>login</a></li>
               @endif

                

              </ul>
            </div>
          </nav>
        </div>
      </header>





</body>
</html>

