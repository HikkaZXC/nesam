<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Маршрут выхода (должен быть доступен только авторизованным пользователям)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware('guest')->group(function () {
    // авторизация
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    // регистрация
    Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});