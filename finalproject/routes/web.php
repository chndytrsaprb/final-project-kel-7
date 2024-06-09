<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\cartcontroller;
use Illuminate\Support\controllers\categorycontroller;

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


Auth::routes();


Route::resource('profile', ProfileController::class);
Route::resource('product', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('caritem', CartController::class);
Route::resource('cart', CartController::class);
