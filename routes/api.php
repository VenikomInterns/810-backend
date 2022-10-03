<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesContoller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\LoginController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post("/login", [LoginController::class, 'login']);  //get all products

});



Route::prefix('products')->group(function(){
    Route::get("/", [ProductsController::class, 'index']);  //get all products
    Route::get("/category/{id}", [ProductsController::class, 'GetProductsByCategory']);  //get all products by category
});


Route::prefix('categories')->group(function(){
    Route::get("/", [CategoriesContoller::class, 'index']);  //get all categories
});

Route::prefix('admin')->group(function(){
    Route::prefix('products')->group(function() {
        Route::get("/", [ProductsController::class, 'GetAllProducts'])->middleware(['role:admin']);  //get all products
        Route::get("/{id}", [ProductsController::class, 'GetProduct'])->middleware(['role:admin']);  //get product
        Route::post("/", [ProductsController::class, 'CreateProduct'])->middleware(['role:admin']);  //create product
        Route::delete("/{id}", [ProductsController::class, 'DeleteProduct'])->middleware(['role:admin']);  //delete product
        Route::put("/{id}", [ProductsController::class, 'EditProduct'])->middleware(['role:admin']);  //edit  product
    });
});

