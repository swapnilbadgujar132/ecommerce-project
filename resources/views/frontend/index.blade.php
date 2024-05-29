
@extends('layouts.index')     



@section('slider')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
      @foreach($slider as $key => $slide)
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : '' }}" aria-label="Slide {{ $key + 1 }}"></button>
      @endforeach
  </div>

  <div class="carousel-inner">
      @foreach($slider as $key => $slide)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
          <section id="hero" class="hero d-flex align-items-center section-bg">
              <i id="prev_btn" data-bs-target="#myCarousel" data-bs-slide="prev" style="cursor: pointer;" class="fa-regular fa-circle-left"></i>
              <div class="container">
                  <div class="row justify-content-between gy-5">
                      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                          <img src="frontend/img/slider/{{ $slide['img_name'] }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                      </div>
                      <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                          <h2 data-aos="fade-up">{{ $slide['title'] }}</h2>
                          <p data-aos="fade-up" data-aos-delay="100">{{ $slide['about'] }}</p>
                          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                              <a href="https://wa.me/7666617213/?text=Hi swapnil" class="btn-book-a-table">Contact</a>
                          </div>
                      </div>
                  </div>
              </div>
              <i id="next_btn" data-bs-target="#myCarousel" data-bs-slide="next" style="cursor: pointer;" class="fa-regular fa-circle-right"></i>
          </section>
      </div>
      @endforeach
  </div>
</div>


<script>
  $(document).ready(function() {
    // Initialize the carousel with custom slide speed
    $('#myCarousel').carousel({
      interval: 2000 // Adjust the slide speed here (in milliseconds)
    });
  });
</script>
       
@endsection




@section('product')
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
  @foreach ($product as $cur_product)
  
  <div class="col-6 col-sm-6 col-lg-3 mb-3">
      <div class="product text-center">
          <div class="position-relative mb-3">
              <div class="badge text-white"></div>
              <a class="d-block" href="">
                  <img style="" class="img-fluid w-100" src="frontend/img/product/{{$cur_product->img_one}}" alt="...">
              </a>
              <div class="product-overlay"> 
                  <ul  id="model" class="mb-0 list-inline">

                    <li class="list-inline-item m-0 p-0">
                      <a onclick="wishlist({{$user_id}}, {{ $cur_product->id }})">
                      @if (in_array($cur_product->id, $wishlists))
                        <i id="heart_{{ $cur_product->id }}" style="color:red" class='fas fa-heart'></i>
                        @else
                          <i id="heart_{{ $cur_product->id }}" style="color:black" class='fas fa-heart'></i>
                        @endif  
                      </a>
                     </li>
                      
                     
                      <li class="list-inline-item m-0 p-0">
                         <!-- background-color:#f1f2ec;  border-radius: 25px;  border: 1px solid black;padding:5px; -->
                      <a id="model" style="background-color:black;  border-radius: 25px;  border: 1px solid black; padding-left:10px;padding-right:10px;color:white;"  class="btn" target="_blank" href="">Purchase</a>
                      </li>
                      
                      <li class="list-inline-item mr-0">
                          <a id="model" style='' class="btn model_link"  data-bs-toggle="modal" data-id="{{ $cur_product->id }}"><i class="fas fa-expand"></i></a>
                      </li>

                  </ul>
              </div>
          </div>


          <div class="" style="font-size:5px">
          <h6><a class="reset-anchor" href="">{{$cur_product->title}}</a></h6>
          <p class="">₹{{$cur_product->price}}<span class="p-2 text-muted text-decoration-line-through">₹{{$cur_product->og_price}}</span> <span class="small " style="color: green;font-weight: 600;"> {{$cur_product->discount}}%</span> </p>
          </div>
        </div>
  </div>
@endforeach



<script>
  function wishlist(user_id,product_id) {
    console.log(user_id);
    console.log(product_id);
     
      if (user_id == 0) {
      window.location.href = '{{route('newuser.index')}}';
      }  
      else {
        $(document).ready(function() {
          $.ajax({
            url: '{{ route("wishlist.work", ["user_id" => ":user_id", "product_id" => ":product_id"]) }}'.replace(':user_id', user_id).replace(':product_id', product_id),
              type: 'GET',
              success: function(response) {
                  // Handle success response if needed
                  console.log(response);
                  var heartIcon = $('#heart_' + product_id);
                        if (response === 'red') {
                        heartIcon.css("color", "red");
                        } else {
                            heartIcon.css("color", "black");
                        }
              },
              error: function(xhr, status, error) {
                  // Handle error response if needed
                  console.log(xhr.responseText);
              }
          });
      });
      }
      }
    </script>
</div>

@endsection



@section('three_collety')
@foreach ($three_collette_own_website as $collette)

    <div class="row text-center gy-3">
        <div class="col-lg-4">
          <div class="d-inline-block">
            <div class="d-flex align-items-end">
               
            <i class="fas fa-hand-holding-usd h1"></i>
                    
                <div class="text-start ms-3">
                <h6 class="text-uppercase mb-1">{{$collette->title_1}}</h6>
                <p class="text-sm mb-0 text-muted">{{$collette->text_1}} </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-inline-block">
            <div class="d-flex align-items-end">
   
            <i class="fas fa-phone-volume h1"></i>
            
            
              <div class="text-start ms-3">
                <h6 class="text-uppercase mb-1">{{$collette->title_2}}</h6>
                <p class="text-sm mb-0 text-muted">{{$collette->text_2}}</p>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-inline-block">
            <div class="d-flex align-items-end">
             
            <i class="fas fa-tags h1"></i>
             
              <div class="text-start ms-3">
                <h6 class="text-uppercase mb-1">{{$collette->title_3}}</h6>
                <p class="text-sm mb-0 text-muted">{{$collette->text_3}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

@endsection





<div class="modal fade" id="productModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content overflow-hidden border-0">
      <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="row align-items-stretch">
          <div class="col-lg-6 p-lg-0">
            <p class="product-view d-block h-100 bg-cover bg-center" id="img_one" style="" data-gallery="gallery1" data-glightbox="Product Image"></p>
          </div>
          <div class="col-lg-6">
            <div class="p-4 my-md-4">
              <h2 id="title" class="h4"></h2>
              <p id="price" class="text-muted"></p>

              <p id="price" class=""> 
              <span id="og_price" class="p-2 text-muted text-decoration-line-through"> </span>
              <span id="discount" class="small " style="color: green;font-weight: 600;"> </span>
              </p>
              
              <p id="details" class="text-sm mb-4">  </p>
              <div class="row align-items-stretch mb-4 gx-0">
                <div class="col-sm-5">
                  <a id="href" class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="">Purchase</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var baseUrl = '{{ asset('frontend/img/product/') }}';
    $('.model_link').on('click', function(e) {
        e.preventDefault();

        var productId = $(this).data('id');
       
        $.ajax({
            url: "{{route('product_model')}}", 
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}', 
                id: productId
            },
            success: function(response) {
              console.log(response);
             
             var og_price = response.og_price;
             var price = response.price;
             var title= response.title;
             var discount = response.discount;
             var img_one = response.img_one;
             var id = response.id;
             var href = response.href;
             var details = response.details;
             
             $('#og_price').html('₹'+og_price);
             
             $('#price').html('₹'+price);
             $('#title').html(title);
             $('#discount').html(discount+'%');
             
             var img_url = baseUrl + '/' + img_one;
             $('#img_one').css('background-image', 'url(' + img_url + ')');

             $('#details').html(details);
             $('#href').attr('href',href);
             $('#productModal').modal('show'); 

            },
            error: function(xhr) {
                console.log(xhr.responseText);  // त्रुटि संदेश को लॉग करें
            }
        });
    });
});
</script>