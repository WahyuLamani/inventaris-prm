<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', DashboardHomeController::class);

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');