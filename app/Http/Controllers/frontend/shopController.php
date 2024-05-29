<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
      
    public function all(Request $Request)
     {   
      $search = $Request->search;
      $my_search ='all';
      
      if($search) {
          $searchResults = DB::table('products')
         ->whereRaw(' title LIKE "%' . $search . '%"')
         ->simplePaginate(4);
         $count = $searchResults->count();
         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
        }
        else {
           $wishlists = [];
           $user_id = 0;
        } 
        return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);          
      } else {
         $users = DB::table('products')
         ->simplePaginate(4);
         $count = $users->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
        }
        else {
           $wishlists = [];
           $user_id = 0;
        } 
        return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
      }
     }
     

     public function half_all(Request $Request){
      $search = $Request->search;
      $my_search ='half_all';
      
      if($search) {
          $searchResults = DB::table('products')
         ->whereRaw('sleeve = "half" AND title LIKE "%' . $search . '%"')
         ->simplePaginate(4);
         $count = $searchResults->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
        }
        else {
           $wishlists = [];
           $user_id = 0;
        } 

         return view('frontend.shop', ['user_id'=>$user_id,'wishlists'=>$wishlists,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);
          
      } else {
         $users = DB::table('products')
         ->whereRaw('sleeve = "half" ')
         ->simplePaginate(4);
         $count = $users->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
        }
        else {
           $wishlists = [];
           $user_id = 0;
        } 
         return view('frontend.shop', ['user_id'=>$user_id,'wishlists'=>$wishlists,'count'=>$count,'search'=>$my_search,'users' => $users]);
      }
  }
     

  public function half_god(Request $Request){
   $search = $Request->search;
   $my_search ='half_god';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "half"  AND category = "good" AND title LIKE  ?',["%$search%"] )
      ->simplePaginate(4);
      $count = $searchResults->count();
      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
     }
     else {
        $wishlists = [];
        $user_id = 0;
     } 
       return view('frontend.shop', ['user_id'=>$user_id,'wishlists'=>$wishlists,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);
       
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "half" AND category = "good" ')
      ->simplePaginate(4);
      // count 0 so that case i kontya file la return 
      $count = $users->count();

       if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}



public function half_cricket(Request $Request){
   $search = $Request->search;
   $my_search ='half_cricket';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "half"  AND  category = "cricket" AND title LIKE ?',["%$search%"])
      ->simplePaginate(4);
      $count = $searchResults->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 

      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);

       
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "half" AND category = "cricket" ')
      ->simplePaginate(4);
      $count = $users->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 

      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}
    
 
public function half_text(Request $Request){
   $search = $Request->search;
   $my_search ='half_cricket';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "half"  AND  category = "text" AND title LIKE   ?',["%$search%"] )
      ->simplePaginate(4);
      $count = $searchResults->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 

      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);       
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "half" AND category = "text" ')
      ->simplePaginate(4);
      $count = $users->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 

      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}

public function half_printed(Request $Request){
   $search = $Request->search;
   $my_search ='half_printed';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "half"  AND  category = "printed" AND  title LIKE   ?',["%$search%"] )
      ->simplePaginate(4);
      $count = $searchResults->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "half" AND category = "printed" ')
      ->simplePaginate(4);
      $count = $users->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 

      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}

    
 

    //  full t shirt 
    public function full_all(Request $Request){
      $search = $Request->search;
      $my_search ='full_all';
      if($search) {
          $searchResults = DB::table('products')
         ->whereRaw('sleeve = "full"  AND  title LIKE   ?',["%$search%"] )
         ->simplePaginate(4);
         $count = $searchResults->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
          }
          else {
           $wishlists = [];
           $user_id = 0;
          } 

         return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);
          
      } else {
         $users = DB::table('products')
         ->whereRaw('sleeve = "full"  ')
         ->simplePaginate(4);
         $count = $users->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
          }
          else {
           $wishlists = [];
           $user_id = 0;
          } 

         return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
      }
   }
   

   public function full_god(Request $Request){
      $search = $Request->search;
      $my_search ='full_god';
      if($search) {
          $searchResults = DB::table('products')
         ->whereRaw('sleeve = "full" AND category = "god"  AND  title LIKE   ?',["%$search%"])
         ->simplePaginate(4);
         $count = $searchResults->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
          }
          else {
           $wishlists = [];
           $user_id = 0;
          } 

         return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);

          
      } else {
         $users = DB::table('products')
         ->whereRaw('sleeve = "full" AND category = "god" ')
         ->simplePaginate(4);
         $count = $users->count();

         if (session()->has('id')) {
            $user_id = session()->get('id');
            $user = login::find($user_id);
            $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
          }
          else {
           $wishlists = [];
           $user_id = 0;
          } 
         return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
      }
   }

   
   
public function full_cricket(Request $Request){
   $search = $Request->search;
   $my_search ='full_cricket';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "full"  AND  category = "cricket"  AND  title LIKE   ?',["%$search%"] )
      ->simplePaginate(4);
      $count = $searchResults->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);
       
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "full" AND category = "cricket" ')
      ->simplePaginate(4);
      $count = $users->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}
    
 
public function full_text(Request $Request){
   $search = $Request->search;
   $my_search ='full_text';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "full"  AND  category = "text"  AND  title LIKE   ?',["%$search%"])
      ->simplePaginate(4);
      $count = $searchResults->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);
       
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "full" AND category = "text" ')
      ->simplePaginate(4);
      $count = $users->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}

public function full_printed(Request $Request){
   $search = $Request->search;
   $my_search ='full_printed';
   if($search) {
       $searchResults = DB::table('products')
      ->whereRaw('sleeve = "full"  AND  category = "printed"   AND  title LIKE   ?',["%$search%"])
      ->simplePaginate(4);
      $count = $searchResults->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $searchResults]);       
   } else {
      $users = DB::table('products')
      ->whereRaw('sleeve = "full" AND category = "printed" ')
      ->simplePaginate(4);
      $count = $users->count();

      if (session()->has('id')) {
         $user_id = session()->get('id');
         $user = login::find($user_id);
         $wishlists= $user->products->pluck('id')->sort()->values()->toArray();  
       }
       else {
        $wishlists = [];
        $user_id = 0;
       } 
      return view('frontend.shop', ['wishlists'=>$wishlists,'user_id'=>$user_id,'count'=>$count,'search'=>$my_search,'users' => $users]);
   }
}
}
