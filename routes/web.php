<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/create', function () {
    return view('category.create');
});
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
//subcategories
// Route::get('/create1', function () {
//     return view('sub_categories.create');
// });
Route::get('/create1',[SubcategoryController::class,'create1'])->name('sub_categories.create');
Route::post('/store1',[SubcategoryController::class,'store1'])->name('sub_categories.store1');
Route::get('/subcategory/edit1/{id}',[SubcategoryController::class,'edit1'])->name('sub_categories.edit');
Route::post('/subcategory/update/{id}',[SubcategoryController::class,'update1'])->name('sub_categories.update');
Route::get('/subcategory/delete/{id}',[SubcategoryController::class,'delete1'])->name('sub_categories.delete');


//products

Route::get('/create2',[ProductController::class,'create2'])->name('products.create');
Route::post('/store2',[ProductController::class,'store2'])->name('products.store2');
Route::get('/products/edit2/{id}',[ProductController::class,'edit2'])->name('products.edit');
Route::post('/products/update/{id}',[ProductController::class,'update2'])->name('products.update');
Route::get('/products/delete/{id}',[ProductController::class,'delete2'])->name('products.delete');
require __DIR__.'/auth.php';

Route::get('/change/password', function () {
    return view('profile.changepassword');
})->name('changePassword');
Route::post('/change/password',[UserController::class,'changePassword'])->name('changePassword');


