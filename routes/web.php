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

Route::get('/', function () { return view('home'); });
Route::get('/inicio',function () {return view('home'); })->name('home');
Route::get('/productos',[App\Http\Controllers\StoreController::class,'list_products'])->name('productos');
Route::get('/crear_producto',[App\Http\Controllers\StoreController::class,'add_product']  )->name('add_product');
Route::post('/crear_producto',[App\Http\Controllers\StoreController::class,'store_product'])->name('store_product');
Route::get('/editar_producto/{entrada}',[App\Http\Controllers\StoreController::class,'edit_products'])->name('editar_producto');
Route::get('/eliminar_producto/{entrada}',[App\Http\Controllers\StoreController::class,'destroy_products'])->name('eliminar_producto');
Route::get('/vender_producto/{entrada}',[App\Http\Controllers\StoreController::class,'vender_producto'])->name('vender_producto');
Route::post('/venta_products',[App\Http\Controllers\StoreController::class,'venta_products'])->name('venta_products');
Route::get('/ventas',[App\Http\Controllers\StoreController::class,'list_ventas'])->name('ventas');
