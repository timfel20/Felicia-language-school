<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('landing.destroy');
Route::get('/', [HomeController::class, 'index'])->name('landing')->middleware('auth');

