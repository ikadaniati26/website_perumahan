<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\penghuniController;
use App\Http\Controllers\rumahController;
use App\Http\Controllers\pembayaranController;

Route::get('/', [authController::class, 'showLoginForm'])->name('login');

Route::middleware(['web'])->group(function () {
    Route::post('/login', [authController::class, 'login'])->name('proses_login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('website.main.dashboard');
    })->name('dashboard');

    Route::get('/penghuni', [penghuniController::class, 'index']);
});




//route CRUD PENGHUNI
Route::get('/inputpenghuni',[penghuniController::class,'create'])->name('inputpenghuni');
Route::post('/store',[penghuniController::class,'store'])->name('penghuni');
Route::get('/show/{id}', [penghuniController::class, 'show'])->name('show');
Route::get('/edit/{id}', [penghuniController::class, 'edit'])->name('edit');
Route::patch('/update-artikel/{id}',[penghuniController::class, 'update'])->name('update');
Route::delete('/hapus-artikel/{id}',[penghuniController::class, 'destroy'])->name('hapus');

Route::get('/rumah', [rumahController::class, 'index']);
Route::get('/show/{id}', [rumahController::class, 'show'])->name('show');

Route::get('/pembayaran', [pembayaranController::class, 'index']);


