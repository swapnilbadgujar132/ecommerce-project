<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

// use App\Models\refund;
// use Illuminate\Http\Request;

class refundController extends Controller
{
 
    public function index()  {
        $data = DB::table('refund_and_returns')->first();
        return view('frontend.refund',['data'=>$data]);
    }
}
