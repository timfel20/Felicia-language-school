<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\MyListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [ProductController::class, 'index'])->name('landing'); 

Route::get('/product/form', [ProductController::class, 'create'])->name('productform');

Route::post('/landing', [ProductController::class, 'store'])->name('product.store');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');

Route::post('/sliderform', [SlideController::class, 'create'])->name('slider.create');

Route::post('/slider/view', [SlideController::class, 'index'])->name('slider.view');

Route::post('/slidereditform', [SlideController::class, 'edit'])->name('slider.edit');

Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');

Route::put('/update/slide/{id}', [SlideController::class, 'update'])->name('slide.update')->middleware('auth');

Route::post('/mine/{id}', [MyListController::class, 'addToList'])->name('myproducts');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('landing.destroy');

/* Route::get('/products/mine', [HomeController::class, 'index'])->name('landing'); */
