<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\login;
use App\Models\product;
use App\Models\Slider;
use App\Models\three_collette_own_website;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//   GET|HEAD        index .......................................................................................... index.index › frontend\HomeController@index
//   POST            index .......................................................................................... index.store › frontend\HomeController@store
//   GET|HEAD        index/create ................................................................................. index.create › frontend\HomeController@create
//   GET|HEAD        index/{index} .................................................................................... index.show › frontend\HomeController@show
//   PUT|PATCH       index/{index} ................................................................................ index.update › frontend\HomeController@update
//   DELETE          index/{index} .............................................................................. index.destroy › frontend\HomeController@destroy
//   GET|HEAD        index/{index}/edit ............................................................................... index.edit › frontend\HomeController@edit

          
class HomeController extends Controller
{
         /**
         * Display a listing of the resource.
         */
         
         

         public function product_model(Request $request)
         {    
            $productId = $request->input('id');
             $data = product::find($productId);
             
            //  ha cur data mala index file madhe get honar ahe response ne tar mala ya data var all acces pahije ahe jene karun me ya responce chya data ne model show kru
        if ($data) {
            return $data;  // JSON रिस्पॉन्स लौटाएं
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }
        }

        public function index()
        {    
            $slider=slider::get();
            $product = product::whereIn('id', range(1, 5))->get();
            $three_collette_own_website =three_collette_own_website::get();
            // return $slider;
            
            if (session()->has('id')) {
                $user_id = session()->get('id');
                $user = login::find($user_id);
                $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
            }
            else {
               $wishlists = [];
               $user_id = 0;
            }

            return view('frontend.index',['user_id'=>$user_id,'wishlists'=>$wishlists,'slider' => $slider , 'product' =>$product , 'three_collette_own_website' => $three_collette_own_website]);
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

