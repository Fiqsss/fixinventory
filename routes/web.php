<?php

use App\Http\Controllers\barangMasukController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\vendorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/databarang',[DataBarangController::class,'index'])->name('databarang');
Route::get('/vendor', [vendorController::class, 'index'])->name('vendor');
Route::post('/addvendor', [vendorController::class,'addvendor'])->name('postvendor');
Route::post('/editvendor/{id}', [vendorController::class,'editvendor'])->name('editvendor');

Route::get('/vendor', [vendorController::class, 'index'])->name('vendor');
Route::get('/', [barangMasukController::class, 'index'])->name('dashboard');
Route::get('/barangmasuk', [barangMasukController::class, 'barangmasuk'])->name('barangmasuk');
Route::post('/tambahkedatangan', [
    barangMasukController::class, 'tambahkedatangan',
])->name('tambahkedatangan');
Route::post('/editkedatangan/{id}', [barangMasukController::class, 'editkedatangan'])->name('editkedatangan');

