<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Products
Route::prefix('san-pham')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{category}', [ProductController::class, 'category'])->name('category');
    Route::get('/chi-tiet/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('/sale', [ProductController::class, 'sale'])->name('sale');
});

// Authentication
Route::middleware('guest')->group(function () {
    Route::get('/dang-nhap', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/dang-nhap', [LoginController::class, 'login']);
    Route::get('/dang-ky', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/dang-ky', [RegisterController::class, 'register']);
    Route::get('/quen-mat-khau', function () {
        return view('auth.forgot-password');
    })->name('password.request');
});

// Cart
Route::get('/gio-hang', function () {
    return view('cart');
})->name('cart');

// Checkout
Route::get('/thanh-toan', function () {
    return view('checkout');
})->name('checkout');

// User Account
Route::get('/tai-khoan', function () {
    return view('account');
})->name('account');

// Newsletter
Route::post('/newsletter/subscribe', function () {
    // Handle newsletter subscription
    return back()->with('success', 'Đăng ký nhận tin thành công!');
})->name('newsletter.subscribe');

