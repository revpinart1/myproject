<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [Products::class,'getProducts' ])->name('products');
Route::get('/aboutus', [Products::class,'AboutUs' ])->name('aboutus');
Route::get('/callus', [Products::class,'CallUs' ])->name('callus');