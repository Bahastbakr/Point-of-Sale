<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
Route::put('/products/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

// sell products
Route::get('/product/sell', [App\Http\Controllers\ProductController::class, 'sell'])->name('product.sell');
Route::get('/product/sell/{barcode}', [App\Http\Controllers\ProductController::class, 'search_barcode']);

// auth
Auth::routes([
    'register' => false
]);

// transaction
Route::post('/transaction', [App\Http\Controllers\TransactionController::class, 'store'])->name('transaction.store');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
