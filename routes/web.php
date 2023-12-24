<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;

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

Route::resource('products', 'App\Http\Controllers\ProductController');

Route::resource('sales', 'App\Http\Controllers\SaleController');
Route::get('/','App\Http\Controllers\SaleController@dashboard' )->name('home');