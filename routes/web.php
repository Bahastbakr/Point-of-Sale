<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
