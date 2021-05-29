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
Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/kategoria/shto', [App\Http\Controllers\KategoriaController::class, 'store'])->name('storekategoria');
Route::post('/produkti/shto', [App\Http\Controllers\ProduktiController::class, 'store'])->name('storeprodukti');

Route::get('/{slug?}', [App\Http\Controllers\IndexController::class, 'kategoria'])->name('kategoria');
