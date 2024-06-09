<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/master', function () {
    return view('layouts.master');
});
<<<<<<< HEAD

Auth::routes();

=======
Route::resource('profile', ProfileController::class);
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('caritem', CaritemController::class);
Route::resource('cart', CartController::class);
>>>>>>> 67a187406121fb2f1b0d5adf3b3f9c2099ed136e
