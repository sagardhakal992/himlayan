<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/product",function (Request $request){
    $categoryid= $request->get('category_id');
    if ($categoryid){
        $products=Product::where('category_id',$categoryid)->paginate(10);
    }
    else{
        $products=Product::paginate(10);
    }
    return response($products);

});
