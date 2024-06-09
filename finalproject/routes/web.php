<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

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

Auth::routes();

Route::resource('profile', ProfileController::class);
Route::resource('product', productController::class);
Route::resource('category', CategoryController::class);
Route::resource('caritem', CartItemController::class);
Route::resource('cart', cartController::class);
