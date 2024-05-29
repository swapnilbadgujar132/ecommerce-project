<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\login;
use App\Models\product;
use App\Models\wishlist;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class wishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
      return redirect()->view('frontend.wishlist');
    }

public function work($user_id, $product_id)
{
    
     $already = Wishlist::where('user_id', $user_id)
     ->where('product_id', $product_id)
     ->count();
     if ( 0 < $already) {
        Wishlist::where('user_id', $user_id)->where('product_id', $product_id)->delete();
        return "none";
    } else {
        Wishlist::create([
            'user_id' => $user_id ,
            'product_id' => $product_id
          ]);
          return "red";
     }
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
