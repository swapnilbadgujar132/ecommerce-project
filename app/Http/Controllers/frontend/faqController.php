<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class faqController extends Controller
{
    public function index() {
        $data = DB::table('faqs')->get();
        return view('frontend.faq',['data'=>$data]);
    }
}
