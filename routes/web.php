<?php

use App\Http\Controllers\BarangController;
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

Route::get('/', [BarangController::class, 'ViewHome']);

Route::get('/barang/{id}', [BarangController::class, 'ViewBarang'])->name('barang');

Route::get('/toko/{toko_id}/{nama_toko}', [BarangController::class, 'ViewToko']);
