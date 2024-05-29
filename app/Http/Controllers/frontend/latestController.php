<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\login;
use App\Models\product;
use Illuminate\Http\Request;

class latestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = product::whereRAW('new_or_old ="new" ')->get();
        if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
        }
        else {
           $wishlists = [];
           $user_id = 0;
        }

      return view('frontend.latest',['data'=>$data,'wishlists'=>$wishlists,'user_id'=>$user_id]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
