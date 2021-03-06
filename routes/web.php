<?php

use App\Http\Controllers\Auth\ChangePassword;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Auth;

Route::get('/', DashboardHomeController::class);

Auth::routes();


Route::middleware('auth')->group(function ()
{
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/change-password', ChangePassword::class)->name('change-password');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::get('/outlet',[CabangController::class, 'index'])->name('outlet');
    Route::post('/outlet', [CabangController::class, 'create'])->name('outlet.create');
    Route::get('/ruangan', [RuanganController::class, 'index'])->name('ruangan');
    Route::post('/ruangan', [RuanganController::class, 'create'])->name('ruangan.create');
});

