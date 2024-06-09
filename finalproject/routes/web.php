<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\cartcontroller;
use Illuminate\Support\controllers\categorycontroller;
=======
use App\Http\Controllers\categoryController;
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('layouts.master');
});
<<<<<<< HEAD


Auth::routes();


Route::resource('profile', ProfileController::class);
Route::resource('product', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('caritem', CartController::class);
Route::resource('cart', CartController::class);
=======

Auth::routes();

Route::resource('profile', ProfileController::class);
Route::resource('product', productController::class);
Route::resource('category', CategoryController::class);
Route::resource('caritem', CartItemController::class);
Route::resource('cart', cartController::class);
>>>>>>> 71daa77cbf1ba9fe70c9c2f8038ab9b020604754
