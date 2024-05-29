@extends('layouts.shop')     

<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

@section('sidebar')
   
      <div class="col-lg-3 order-2 order-lg-1">
                 <!-- Sidebar Content -->
                 <h5 class="text-uppercase mb-4">Sub Categories</h5>
                 <div class="py-2 px-4 bg-primary text-white mb-3"><strong class="small text-uppercase fw-bold">All sleeve</strong></div>
                 <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                     <li class="mb-2"><a class="reset-anchor" href="{{route('all')}}">All </a></li>
                 </ul>

                <div class="py-2 px-4 bg-primary text-white mb-3"><strong class="small text-uppercase fw-bold">half sleeve</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">

                    <li class="mb-2"><a class="reset-anchor" href="{{ route('half_all') }}">All</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('half_god')}}">God</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('half_cricket')}}">Cricket</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('half_text') }}">Text</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('half_printed') }}">Printed</a></li>
                </ul>
            
                <div class="py-2 px-4 bg-primary text-white mb-3"><strong class="small text-uppercase fw-bold">full sleeve</strong></div>
                <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('full_all') }}">All</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('full_god') }}">God</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('full_cricket') }}">Cricket</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('full_text') }}">Text</a></li>
                    <li class="mb-2"><a class="reset-anchor" href="{{ route('full_printed') }}">Printed</a></li>
                </ul>
             </div>  
              
@endsection





@section('products')                
                 <!-- Form -->
                 <div class="col-lg-9 order-2 order-lg-2 mb-5 mb-lg-0">
                 <div class="form-container container">
                     <form action="{{route($search)}}" method="post">
                      {{-- if(sleeve == half ) or 
                        if(sleeve== half) and if (category== god) 
                        if(sleeve== half) and if (category== cricket) 
                        
                        --}}



                        {{-- {{route('half_text')}} --}}
                        {{-- konte page search karyche ahe --}}
                         @csrf
                         <label for="search">🔍 Search for your favorite T-shirt</label>
                         <div style="display: flex;">
                             <input type="text" class="custom" name="search" placeholder="Enter Product title...">
                             <input type="submit" class="" name="submit" value="Search">
                         </div>
                     </form>
                 </div>

                 <!-- Product Display -->
                 <div class="row">
                 <!-- Sample Product Display -->
                @if ($count == 0)
                    <h1>NO DATA</h1>
                @else
                @foreach ($users as $first)
                <div class="col-6 col-sm-6 col-lg-3 mb-3">
                    <div class="product text-center">
                        <div class="mb-3 position-relative">
                            <div class="badge text-white bg-"></div>
                            <!-- Product Image -->

                            {{--  --}}
                            <a class="d-block" href="{{ route('detail.index', ['id' => $first->id]) }}"><img style="border: 1px solid black;" class="img-fluid w-100" src="frontend/img/product/{{$first->img_one}}" alt="..."></a>
                            <!-- Product Overlay -->
                            <div class="product-overlay">
                                <!-- Action Buttons -->
                                <ul  id="model" class="mb-0 list-inline">
                            
                                  <li class="list-inline-item m-0 p-0">
                                    <a onclick="wishlist({{$user_id}}, {{ $first->id }})" class="">
                                      @if (in_array($first->id, $wishlists))
                                      <i id="heart_{{ $first->id }}" style="color:red" class='fas fa-heart'></i>
                                      @else
                                       <i id="heart_{{ $first->id }}" style="color:black" class='fas fa-heart'></i>
                                      @endif 
                                    </a>
                                                       
                                   </li>
              
                                   
                                    <li class="list-inline-item m-0 p-0">
                                       <!-- background-color:#f1f2ec;  border-radius: 25px;  border: 1px solid black;padding:5px; -->
                                    <a id="model" style="background-color:black;  border-radius: 25px;  border: 1px solid black; padding-left:10px;padding-right:10px;color:white;"  class="btn" target="_blank" href="">Purchase</a>
                                    </li>
                                    
                                    <li class="list-inline-item mr-0">
                                      <a id="model" style='' class="btn model_link"  data-bs-toggle="modal" data-id="{{ $first->id }}"><i class="fas fa-expand"></i></a>
                                    </li>
              
                                </ul>
                            </div>
                        </div>
                        <!-- Product Title -->
                        <h6><a class="eset-anchor" href="detail.php">{{$first->title}}</a></h6>
                        <!-- Product Price -->
                         
                        <p class="">₹{{$first->price}}<span class="p-2 text-muted text-decoration-line-through">₹{{$first->og_price}}</span> <span class="small " style="color: green;font-weight: 600;">{{$first->discount}}%off</span> </p>
                    </div>
                   </div>

                    

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
  
                @endforeach
                @endif  
                 </div>

                 {{ $users->links() }}
                </div>


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

                
@endsection













{{-- Model Code --}}
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