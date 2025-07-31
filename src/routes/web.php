<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/riwayat', [RiwayatController::class, 'index']);

    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/tambah', [AdminController::class, 'tambah'])->name('admin.tambah');
        Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
    });
});
