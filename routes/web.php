<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WrController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;

// Guest Routes (Login)
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Resource and Export Routes
    Route::resource('wr', WrController::class);
    Route::get('wr-export', [WrController::class, 'export'])->name('wr.export');

    // Dashboard Routes
    Route::get('/dashboard/admin', [WrController::class, 'index'])->name('dashboard');
    Route::get('/show', [WrController::class, 'index'])->name('show');

    // Dashboard Management
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/dashboard/admin/sm', [AdminController::class, 'admin'])->middleware([UserAkses::class . ':sm']);
    Route::get('/dashboard/user', [AdminController::class, 'user'])->middleware([UserAkses::class . ':user']);
    Route::get('/dashboard/supplier', [AdminController::class, 'supplier'])->middleware([UserAkses::class . ':supplier']);

    // Users Management with AdminMiddleware
    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::resource('users', UserController::class); // Mengelola semua operasi User
        Route::get('userlist', [UserController::class, 'list'])->name('users.list');
    });

    // // role and permission management
    // route::middleware([adminmiddleware::class])->group(function () {
    //     route::get('/role/permissions', [rolepermissioncontroller::class, 'index'])->name('role.permission.list');
    //     route::post('/role/permissions', [rolepermissioncontroller::class, 'store'])->name('role.permission.store');
    // });

    // Logout Route
    Route::post('/logout', [SesiController::class, 'logout'])->name('logout');
});

// Test Route
Route::get('/test', function () {
    return view('test');
});
