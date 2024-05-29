<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


use App\Http\Controllers\Controller;
use App\Models\login;
use App\Models\product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Rules\currect_password;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\password;

// use App\Models\login;
// use Illuminate\Support\Facades\DB;

class loginController extends Controller
{

    

    public function forget_pass_with_email(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
        ]);

     $cur_email = $request->email;
     $email = DB::table('logins')->whereRAW("email = ? ",[$cur_email])->first();
     if (!empty($email)) {
        return 'Send Successfully';
     }
     else {
       return 'invalid Email';
     }
    //  return redirect()->guest('index');
    }
    

    public function logout()
    {
     Session::flush();
     return redirect()->guest('index');
    }
    
    public function login()
    {  
    if (session()->has('id')) {
        return "true";
        // return redirect()->guest('index');
    }
    else {
        return "true";
        // return view('frontend.login');
    }
    }
    
    public function newuser()
    {
        return view('frontend.newuser');
    }
    
    public function index($user_id)
    {
        //all product count
        if (session()->has('id')) {
            $count = login::withCount('products')->find($user_id);
            $products_count = $count->products_count;
            
            $cur_user = login::find($user_id);
            $products = $cur_user->products()->simplePaginate(5);
            
            return view('frontend.wishlist',['products_count'=>$products_count,'products' =>$products]);
        }
        else {
           return redirect()->guest('index');
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
         $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'mobile' =>'required|min:10',
            'email' => 'required|email|unique:logins,email', // तालिका का नाम और कॉलम का नाम सही से डालें
            'password' => 'required|min:8',
        ],[
            'first_name.required' => 'Enter your First name',
            'last_name.required' => 'Enter your last name',
            'mobile.required' => 'Enter your mobile Number',
            'email.required' => 'Enter your mobile Number',
            'mobile.min' => ' VALID NUMBER FILL ',
            'email.email' => 'VALID  Email',
            'email.unique' => 'Fill unique Email ID',
            'password.min' => 'PASWORD RENG 8',
        ]
    );
        
        login::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'mobile'=>$request->mobile,
            'email' => $request->email,
            'password' => $request->password,
        ]);
       $user = login::where('email',$request->email)->first();         
        session()->put('id', $user['id']);
        return redirect()->guest('index');
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
    public function destroy($product_id)
    {   
        if (session()->has('id')) {
            $sessionId = session('id');
            $user = login::find($sessionId);
            $products = $user->products()->detach($product_id);
            return redirect()->guest('wishlist/'.$sessionId.'');
        }

        else {
           return redirect()->guest('index');
        }
     
      
      //delete product_id 

    }
    
    public function user_login(Request $Request)
    {
        $Request->validate([
           'email'=>'required|exists:logins,email',
           'password'=>['required','min:8',new currect_password($Request->email)]
        ],[
           'email.required'=>'plese insert',
           'email.exists'=>'ure not login . FIRST ure NEW user form Fill',
           'password.required'=>'fill pass',
           'password.current_password' => 'Current Password entered',
           'password.min'=>'fill min 8 digit pass',
        ]);
      
      $email = $Request->email;
      $password = $Request->password;
      $user = login::whereRAW('email = ? AND password = ?',[$email,$password])->first();
      session()->put('id', $user['id']);
      return redirect()->guest('index');
    }
    
        // user cha pass an mi enter kelela pass ha same nasel tar  

    }
     
     

