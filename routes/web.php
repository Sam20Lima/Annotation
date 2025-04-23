<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

route::get('/criar-conta', [UserController::class, 'create'])->name('create-account');
route::post('/criar-conta', [UserController::class, 'store'])->name('insert-account');

route::get('/login', [AuthController::class, 'index'])->name('login');

Route::middleware(['throttle:login-attempts'])->group(function () {
    route::post('/login', [AuthController::class, 'loginAttempts'])->name('auth');
});
route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');