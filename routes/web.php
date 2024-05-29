<?php

use App\Http\Controllers\frontend\aboutController;
use App\Http\Controllers\frontend\conditionController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\detailController;
use App\Http\Controllers\frontend\faqController;
use App\Http\Controllers\frontend\formController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\latestController;
use App\Http\Controllers\frontend\loginController;
use App\Http\Controllers\frontend\shopController;
use App\Http\Controllers\frontend\wishlistController;
use App\Http\Controllers\frontend\refundController;
use App\Models\login;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('forget',function ()  {
return view('frontend.forget');
})->name('forget.index');

route::post('forget_pass_with_email',[loginController::class , 'forget_pass_with_email'])->name('forget_pass_with_email');

// Route::resource('index',sliderController::class);
route::post('product_model',[HomeController::class , 'product_model'])->name('product_model');

route::get('about',[aboutController::class , 'index'])->name('about.index');

route::get('condition',[conditionController::class , 'index'])->name('condition.index');

Route::resource('contact',contactController::class);

route::get('detail/{id}',[detailController::class ,'index'])->name('detail.index');

route::get('faq',[faqController::class , 'index'])->name('faq.index');

route::post('subscribe',[formController::class , 'subscribe'])->name('subscribe.index');

Route::resource('index',HomeController::class);

Route::resource('latest',latestController::class);

route::resource('login',loginController::class);

route::get('login',[loginController::class ,'login'])->name('login');

route::post('login/store',[loginController::class ,'store'])->name('login.store');

route::get('newuser',[loginController::class ,'newuser'])->name('newuser.index');

route::post('user_login',[loginController::class ,'user_login'])->name('user.login');

route::controller(shopController::class)->group(function(){
    // get or post dono us na karne pade is liye kuck alag method ka used
    route::match(['get', 'post'],'all','all')->name('all');
    Route::match(['get', 'post'], 'half_all', 'half_all')->name('half_all');
    route::match(['get', 'post'],'half_god','half_god')->name('half_god');
    route::match(['get', 'post'],'half_cricket','half_cricket')->name('half_cricket');
    route::match(['get', 'post'],'half_text','half_text')->name('half_text');
    route::match(['get', 'post'],'half_text','half_text')->name('half_text');
    route::match(['get', 'post'],'half_printed','half_printed')->name('half_printed');
    route::match(['get', 'post'],'full_all','full_all')->name('full_all');
    route::match(['get', 'post'],'full_god','full_god')->name('full_god');
    route::match(['get', 'post'],'full_cricket','full_cricket')->name('full_cricket');
    route::match(['get', 'post'],'full_printed','full_printed')->name('full_printed');
    route::match(['get', 'post'],'full_text','full_text')->name('full_text');
    route::match(['get', 'post'],'full_printed','full_printed')->name('full_printed');
});

Route::get('/',function ()  {
    return  redirect()->guest('index');
})->name('');

// Route::delete('/login/destroy/{product}', [LoginController::class, 'destroy'])->name('login.destroy');

Route::get('logout', [LoginController::class, 'logout'])->name('logout.index');

// Route::resource('wishlist',loginController::class);
route::get('wishlist/{user_id}',[loginController::class ,'index'])->name('wishlist.index');

route::get('wishlist/{user_id}/{product_id}',[wishlistController::class ,'work'])->name('wishlist.work');
route::get('refund',[refundController::class ,'index'])->name('refund.index');
// route::post('product_search',[formController::class , 'product_search'])->name('product_search');

require __DIR__.'/auth.php';

