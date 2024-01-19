<?php

use App\Http\Controllers\barangMasukController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\LoginController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/databarang', [DataBarangController::class, 'index'])->name('databarang');
    Route::get('/vendor', [vendorController::class, 'index'])->name('vendor');
    Route::post('/addvendor', [vendorController::class, 'addvendor'])->name('postvendor');
    Route::post('/editvendor/{id}', [vendorController::class, 'editvendor'])->name('editvendor');

    Route::get('/vendor', [vendorController::class, 'index'])->name('vendor');
    // Route::get('/', [barangMasukController::class, 'index'])->name('dashboard');
    Route::get('/', [barangMasukController::class, 'barangmasuk'])->name('barangmasuk')->middleware('auth');
    Route::post('/tambahkedatangan', [
        barangMasukController::class, 'tambahkedatangan',
    ])->name('tambahkedatangan');
    Route::post('/editkedatangan/{id}', [barangMasukController::class, 'editkedatangan'])->name('editkedatangan');

});


Route::middleware(['guest'])->group(function()
{
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/login', [LoginController::class, 'login_procces'])->name('loginPost');
    Route::post('/register', [LoginController::class, 'registerPost'])->name('registerPost');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
