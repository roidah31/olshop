<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 //member section 
    Route::get('/',[HomeController::class,'depan']);   
    Route::get('/home',[HomeController::class,'depan']);   
    Route::get('/site_product/{id}',[HomeController::class,'product']);
    Route::get('/site_about',[HomeController::class,'about']);
    Route::get('/site_contact',[HomeController::class,'contact']);
    Route::get('/site_login', [HomeController::class, 'login']);


    // Cart section 
    Route::get('/site_addcart/{id}', [HomeController::class, 'addcart'])->where("id","[0-9]+");
    Route::get('/site_listcart/{id}', [HomeController::class, 'listcart']);
    Route::get('/site_cart', [HomeController::class,'cart']);
    //Cart  end 


Auth::routes();

Route::group(['middleware' => ['web', 'auth']],function () {
       
        //member section
        Route::get('/site_deletecart/{id}', [HomeController::class, 'deletecart']);
        Route::get('/site_checkout', [HomeController::class, 'checkout']);
        Route::post('/site_addorder',[HomeController::class,'addorder']);
        Route::get('/site_payment', [HomeController::class, 'payment']);
        Route::get('/invoice/{id}', [HomeController::class, 'invoice']);
        // end cart section
        Route::get('/site_member',[HomeController::class,'member'])->name('site_member');

        //Admin section
        Route::get('/depan', [App\Http\Controllers\HomeController::class, 'index'])->name('depan');
        Route::get('/category/{slug}', [App\Http\Controllers\Ecommerce\FrontController::class,'categoryProduct'])->name('front.category');
        Route::resource('category', CategoryController::class)->except(['create', 'show']);
        Route::resource('product', ProductController::class);
        Route::resource('currency', CurrencyController::class);
        Route::get('/product/{slug}', [App\Http\Controllers\Ecommerce\FrontController::class,'show'])->name('front.show_product');
        Route::get('/detailproduct/{name}', [App\Http\Controllers\Ecommerce\FrontController::class,'detail'])->name('front.detail_product');
        Route::resource('/user',UserController::class);
        Route::resource('/order',OrderController::class);
        Route::resource('/stock',StockController::class);
        Route::get('/users',[]);
});

