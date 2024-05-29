@extends('layouts.wishlist')


@section('wishlist')
<div class="container">


    <p>My WishList ({{$products_count}})</p>
    <!-- Shopping cart table -->
    <table class="table">
        <tbody>
            <!-- Sample wishlist item -->
            @foreach ($products as $single)
            <div class="wishlist-item">
                
                <img src="{{asset('frontend/img/product/'.$single->img_one)}}" alt="Product 1">
                <div class="item-details">

                    <div>Sample Product</div>
                    <div>{{ $single->title }}</div>
                    <div>₹{{$single->price}} <span class="p-2 text-muted text-decoration-line-through">₹{{$single->og_price}}</span> <span class="small" style="color: green;font-weight: 600;">{{$single->discount}}%</span> </div>
                </div>

                <div  class="item-delete">
                    <form action="{{ route('login.destroy', [$single->id]) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="remove-btn">Remove</button>
                    </form>
               </div>
               {{-- , $single->id --}}
            </div>
            @endforeach

            <!-- End sample wishlist item -->
        </tbody>
    </table>
    <!-- End -->

    <!-- Pagination -->
   {{ $products->links() }}
    <!-- End pagination -->
</div>
@endsection