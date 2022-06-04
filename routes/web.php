<?php

use App\Http\Controllers\Dashboard\HomeController as DashboardHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', DashboardHomeController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
