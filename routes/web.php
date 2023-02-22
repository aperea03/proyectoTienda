<?php

use App\Http\Controllers\ListadoProduct;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
