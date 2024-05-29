@extends('layouts.detail')

@section('product_detail')



<div class="row mb-5">
    <div class="col-lg-6">
      <!-- PRODUCT SLIDER-->
      <div class="row m-sm-0">
        <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
          <div class="swiper product-slider-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{asset('frontend/img/product/'.$product->img_one)}}" alt="..."></div>
              <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{asset('frontend/img/product/'.$product->img_two)}}" alt="..."></div>
              <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{asset('frontend/img/product/'.$product->img_three)}}" alt="..."></div>
              <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100" src="{{asset('frontend/img/product/'.$product->img_four)}}" alt="..."></div>
            </div>
          </div>
        </div>


        <div class="col-sm-10 order-1 order-sm-2">
          <div class="swiper product-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{asset('frontend/img/product/'.$product->img_one)}}" data-gallery="gallery2" data-glightbox="Product item 1"><img class="img-fluid" src="{{asset('frontend/img/product/'.$product->img_one)}}" alt="..."></a></div>
              <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{asset('frontend/img/product/'.$product->img_two)}}" data-gallery="gallery2" data-glightbox="Product item 2"><img class="img-fluid" src="{{asset('frontend/img/product/'.$product->img_two)}}" alt="..."></a></div>
              <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{asset('frontend/img/product/'.$product->img_three)}}" data-gallery="gallery2" data-glightbox="Product item 3"><img class="img-fluid" src="{{asset('frontend/img/product/'.$product->img_three)}}" alt="..."></a></div>
              <div class="swiper-slide h-auto"><a class="glightbox product-view" href="{{asset('frontend/img/product/'.$product->img_four)}}" data-gallery="gallery2" data-glightbox="Product item 4"><img class="img-fluid" src="{{asset('frontend/img/product/'.$product->img_four)}}" alt="..."></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
     

    <!-- PRODUCT DETAILS-->
    <div class="col-lg-6">
      <h1>{{$product->title}}</h1>
      <p class="text-muted lead">${{$product->og_price}}</p>
      <p class="text-sm mb-4">{{$product->details}}</p>
      <div class="row align-items-stretch mb-4">
        <div class="col-sm-3 pl-sm-0"><a class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0" href="">Purchase</a></div>
      </div>
      <ul class="list-unstyled small d-inline-block">
        <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span class="ms-2 text-muted">{{$product->sku}}</span></li>
        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2" href="#!">{{$product->category}}</a></li>
        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ms-2" href="#!">{{$product->tags}}</a></li>
      </ul>
    </div>
  </div>

@endsection


@section('description')
<div class="tab-content mb-5" id="myTabContent">
    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
      <div class="p-4 p-lg-5 bg-white">
        <h6 class="text-uppercase">Product description </h6>
        <p class="text-muted text-sm mb-0">{{$product->description}}</p>
      </div>
    </div>
  </div>
@endsection



@section('related_products')
<div class="row">

  @foreach ($related as $item)


{{--  --}}



<div class="col-6 col-sm-6 col-lg-3 mb-3">
  <div class="product text-center">
      <div class="position-relative mb-3">
          <div class="badge text-white"></div>
          <a class="d-block" href="">
              <img style="" class="img-fluid w-100" src="{{asset('frontend/img/product/'.$item->img_one)}}" alt="...">
          </a>
          <div class="product-overlay"> 
              <ul  id="model" class="mb-0 list-inline">

                <li class="list-inline-item m-0 p-0">
                  <a onclick="wishlist({{$user_id}}, {{ $item->id }})">
                  @if (in_array($item->id, $wishlists))
                    <i id="heart_{{ $item->id }}" style="color:red" class='fas fa-heart'></i>
                    @else
                      <i id="heart_{{ $item->id }}" style="color:black" class='fas fa-heart'></i>
                    @endif  
                  </a>
                 </li>

                 
                  <li class="list-inline-item m-0 p-0">
                     <!-- background-color:#f1f2ec;  border-radius: 25px;  border: 1px solid black;padding:5px; -->
                  <a id="model" style="background-color:black;  border-radius: 25px;  border: 1px solid black; padding-left:10px;padding-right:10px;color:white;"  class="btn" target="_blank" href="">Purchase</a>
                  </li>
                  
                  <li class="list-inline-item mr-0">
                      <a id="model" style='' class="btn model_link"  data-bs-toggle="modal" data-id="{{ $item->id }}"><i class="fas fa-expand"></i></a>
                  </li>

              </ul>
          </div>
      </div>


      <div class="" style="font-size:5px">
      <h6><a class="reset-anchor" href="">{{$item->title}}</a></h6>
      <p class="">₹{{$item->price}}<span class="p-2 text-muted text-decoration-line-through">₹{{$item->og_price}}</span> <span class="small " style="color: green;font-weight: 600;"> {{$item->discount}}%</span> </p>
      </div>
    </div>
   </div>
    @endforeach
  </div>





{{-- product Model Structure --}}
<div class="modal fade" id="productModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content overflow-hidden border-0">
      <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body p-0">
        <div class="row align-items-stretch">
          <div class="col-lg-6 p-lg-0">
            <a class="glightbox product-view d-block h-100 bg-cover bg-center" id="img_one" style="" href="" data-gallery="gallery1" data-glightbox="Product Image"></a>
            {{-- <a class="glightbox d-none" id="img_one" href="" data-gallery="gallery1" data-glightbox="Product Image"></a> --}}
          </div>
          <div class="col-lg-6">
            <div class="p-4 my-md-4">
              <h2 id="title" class="h4"></h2>
              <p id="price" class="text-muted"></p>
              
              <p id="price" class=""> 
              <span id="og_price" class="p-2 text-muted text-decoration-line-through"> </span>
              <span id="discount" class="small" style="color: green;font-weight: 600;"> </span>
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


{{-- Like BTN Toggle --}}
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
                  // $('#heart').css("color",response);
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



{{-- Product Model --}}
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
             
             $('#img_one').css('background-image', 'url(' + baseUrl + '/' + img_one + ')');
             $('#img_one').attr('href', baseUrl + '/' + img_one);

             

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
@endsection




