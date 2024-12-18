<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'admin']);
    Route::get('/dashboard/user', [AdminController::class, 'user']);
    Route::get('/dashboard/supplier', [AdminController::class, 'supplier']);
    Route::get('/logout', [SesiController::class, 'logout']);
});
