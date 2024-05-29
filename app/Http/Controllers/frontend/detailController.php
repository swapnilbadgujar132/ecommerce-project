<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\get;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    { 
        $cur_id = DB::table('products')->where('id',$id)->first();
        // category ='$cur_category'  and id != $cur_id
        $id = $cur_id->id;
        $category = $cur_id->category;
        $related = DB::table('products')->whereRaw("id != '$id' AND  category ='$category'  ")->take(4)->get();
        if (session()->has('id')) {
          $user_id = session()->get('id');
          $user = login::find($user_id);
          $wishlists= $user->products->pluck('id')->sort()->values()->toArray(); 
        } else {
            $wishlists = [];
            $user_id = 0;
        }
        
       
        return view('frontend.detail',['product'=>$cur_id,'related'=>$related,'wishlists'=>$wishlists,'user_id'=>$user_id]);
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
