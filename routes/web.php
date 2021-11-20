<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;

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
    return view('home');
});

// Produk
Route::get('/produk', [ProdukController::class, 'index']) -> name('produk');
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']) -> name('produkDelete'); // Lempar ke controller
Route::get('/produktambah', [ProdukController::class, 'create']) -> name('produkTambah');

// Category
Route::get('/category', [CategoryController::class, 'index']) -> name('category');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy']) -> name('categoryDelete');

// Customers
Route::get('/customer', [CustomerController::class, 'index']) -> name('customer');
Route::get('/customer/delete/{id}', [CustomerController::class, 'destroy']) -> name('customerDelete');