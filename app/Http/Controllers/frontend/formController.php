<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class formController extends Controller
{
    public function subscribe(Request $request)
    {    
       $validate = $request -> validate([
        'email' => 'required|email',
        ]);
         
      $insert = DB::table('subscribe')->insert([
         'email' => $request->email,
        ]);
        return redirect()->route('index.index');
    }
     
    // public function product_search(Request $Request){
    //  $search=$Request->search;
    //  $search = DB::table('products')->whereRaw("title LIKE '%$search%' ")->paginate(1);;
    //  return view('frontend.shop',['users'=>$search]);
    // }
}



































