<?php

use App\Http\Controllers\ListadoProduct;
use App\Http\Controllers\CartController;
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
// RUTAS PRINCIPALES PAGINA WEB
Route::get('/', [ListadoProduct::class,'index'])->name('inicio');

Route::get('/productos', [ListadoProduct::class,'index'])->name('inicio');

Route::get('/productos/{id}',[ListadoProduct::class, 'show'])->name('product.show')->middleware("auth");

// Rutas gestion del carrito
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index')->middleware("auth");
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store')->middleware("auth");
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update')->middleware("auth");
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove')->middleware("auth");
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear')->middleware("auth");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
