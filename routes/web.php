<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\BarangController;
use App\Http\Controllers\WrController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});


Route::middleware(['auth'])->group(function () {
    // Route::resource('barangs', BarangController::class);
    Route::resource('wr', WrController::class);
    // Route::get('barangs-export', [BarangController::class, 'export'])->name('barangs.export');
    Route::get('wr-export', [WrController::class, 'export'])->name('wr.export');
    // Route::get('/dashboard/admin', [BarangController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/admin', [WrController::class, 'index'])->name('dashboard');
    // Route::get('/show', [BarangController::class, 'index'])->name('show');
    Route::get('/show', [WrController::class, 'index'])->name('show');
    // Route::delete('/dashboard/admin/{barang}', [BarangController::class, 'destroy'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/dashboard/admin/sm', [AdminController::class, 'admin'])->middleware([UserAkses::class . ':sm']);
    Route::get('/dashboard/user', [AdminController::class, 'user'])->middleware([UserAkses::class . ':user']);
    Route::get('/dashboard/supplier', [AdminController::class, 'supplier'])->middleware([UserAkses::class . ':supplier']);
    Route::middleware([AdminMiddleware::class . ':sm'])->group(function () {
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Menyelaraskan dengan rute dan controller
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
    });
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

// Route::get('/test', function () {
//     return view('edit');
// });
