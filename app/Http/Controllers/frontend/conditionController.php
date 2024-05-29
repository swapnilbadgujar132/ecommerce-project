<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class conditionController extends Controller
{
    public function index()
    {    $data=DB::table('conditions')->get();
        return view('frontend.condition',['data'=>$data]);
    }
}
