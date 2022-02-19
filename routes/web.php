<?php

use App\Http\Controllers\CartContoller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Product;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name("home");

Route::group(["middleware"=>["auth:sanctum","verified"]],function() {
    Route::get("/dashboard",function (){
        return Inertia::render('Dashboard',[
            "products"=>Product::all()
        ]);
    })->name("dashboard");


Route::group(['prefix'=>'cart',"as"=>"cart."],function(){
    Route::get('/',[CartContoller::class,'index'])->name('index');
   
    Route::post('/create',[\App\Http\Controllers\CartContoller::class,'store'])->name('create');
    Route::post('/delete',[\App\Http\Controllers\CartContoller::class,'delete'])->name('delete');
});    
 Route::get('/checkout',function (){
     return Inertia::render('CheckoutForm');
 });

});



Route::get("/product",[\App\Http\Controllers\ProductController::class,'index'])->name("product.home");
