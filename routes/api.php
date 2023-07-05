<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\SubcategoryController;
use App\Http\Controllers\API\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[UserController::class,'login']);
Route::post('/category/store',[CategoryController::class,'store']);
Route::post('/category/update/{id}',[CategoryController::class,'update']);
Route::get('/category/delete/{id}',[CategoryController::class,'delete']);
//subcategory
Route::post('/subcategories/store1', [SubcategoryController::class, 'store1']);
Route::post('/subcategory/update1/{id}',[SubcategoryController::class,'update1']);
Route::get('/subcategory/delete/{id}',[SubcategoryController::class,'delete1']);
//product
Route::post('/product/store2', [ProductController::class, 'store2']);
Route::post('/product/update2/{id}',[ProductController::class,'update2']);
Route::get('/product/delete2/{id}',[ProductController::class,'delete2']);
Route::post('logout', [UserController::class, 'logout']);
