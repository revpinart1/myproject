<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
//تمرين ١٧ واجب ٦
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//->middleware('auth')
Route::prefix('dashboard')->group(function()
{
    Route::get('/dashboard', [Dashboard::class,'Index' ])->name('dashboard');

    Route::prefix('categories')->group(function()
        {
// all the route of the categories

Route::get('/categories', [CategoriesController::class,'Index'])->name('categories.index');
Route::post('/addcategories', [CategoriesController::class,'Create'])->name('categories.create');
Route::get('/deletecategories/{id}', [CategoriesController::class,'Delete'])->name('categories.delete');
Route::get('/editcategories/{id}', [CategoriesController::class,'Edit'])->name('categories.edit');
Route::post('/updatecategories/{id}', [CategoriesController::class,'Update'])->name('categories.update');
        });


        Route::prefix('products')->group(function()
        {
              //all the route of the products
Route::get('/products', [ProductController::class,'Index'])->name('products.index');
Route::post('/createproducts', [ProductController::class,'Create'])->name('products.create');
Route::get('/deleteproducts/{id}', [ProductController::class,'Delete'])->name('products.delete');
Route::get('/editproducts/{id}', [ProductController::class,'Edit'])->name('products.edit');
Route::post('/updateprodusts/{id}', [ProductController::class,'Update'])->name('products.update');

        

        });
});




Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product', [Products::class,'getProducts' ])->name('product');
Route::get('/aboutus', [Products::class,'AboutUs' ])->name('aboutus');
Route::get('/callus', [Products::class,'CallUs' ])->name('callus');


