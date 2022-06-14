<?php

use App\Http\Controllers\Auth\ChangePassword;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', DashboardHomeController::class);

Auth::routes();


Route::middleware('auth')->group(function ()
{
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/change-password', ChangePassword::class)->name('change-password');
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
});

