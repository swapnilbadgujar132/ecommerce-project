<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        return view('frontend.contact');
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
        $request->validate([
          'fullname'=>'required',
          'email'=>'required|email',
          'phone'=>'required',
          'subject'=>'required',
          'message'=>'required',
        ]);
        
        DB::table('contacts')->insert([
           'fullname' =>$request->fullname,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'subject'=>$request->subject,
           'message'=>$request->message,
        ]);
        
          
        return redirect()->guest('contact');
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
