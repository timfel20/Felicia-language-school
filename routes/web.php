<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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
Route::delete('landing{id}', [ProductController::class, 'destroy'])->name('landing');
Route::get('/home', [ProductController::class, 'index'])->name('home');
