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

//ROUTE CRUD PENGHUNI
Route::get('/inputpenghuni',[penghuniController::class,'create'])->name('inputpenghuni');
Route::post('/store',[penghuniController::class,'store'])->name('penghuni');
Route::get('/show_penghuni/{id}', [penghuniController::class, 'show'])->name('show_penghuni');
Route::get('/edit_penghuni/{id}', [penghuniController::class, 'edit'])->name('edit_penghuni');
Route::patch('/update-penghuni/{id}',[penghuniController::class, 'update'])->name('update_penghuni');
Route::delete('/hapus-penghuni/{id}',[penghuniController::class, 'destroy'])->name('hapus_penghuni');

//ROUTE CRUD RUMAH
Route::get('/rumah', [rumahController::class, 'index']);
Route::get('/inputrumah',[rumahController::class,'create_rumah'])->name('inputrumah');
Route::get('/inputrumah/{id}',[rumahController::class,'create'])->name('inputrumah');
Route::post('/storerumah',[rumahController::class,'store'])->name('rumah');
Route::get('/show_rumah/{id}', [rumahController::class, 'show'])->name('show_rumah');
Route::get('/edit_rumah/{id}', [rumahController::class, 'edit'])->name('edit_rumah');
Route::delete('/hapus-rumah/{id}',[rumahController::class, 'destroy'])->name('hapus_rumah');

//ROUTE CRUD PEMBAYARAN
Route::get('/pembayaran', [pembayaranController::class, 'index']);
Route::get('/inputpembayaran',[pembayaranController::class,'create'])->name('inputpembayaran');



