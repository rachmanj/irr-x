<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Accounting\InvoiceController;

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'authenticate')->name('authenticate');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('register');
        Route::post('/register', 'store')->name('register.store');
    });
});

// middleware('auth') means that the user must be authenticated to access the route
Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    require __DIR__ . '/admin.php';
    require __DIR__ . '/accounting.php';
    require __DIR__ . '/finance.php';
    require __DIR__ . '/logistic.php';
    require __DIR__ . '/master.php';
});

Route::get('/check-invoice-number', [InvoiceController::class, 'checkInvoiceNumber'])->name('check.invoice.number');
