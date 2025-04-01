<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

route::get('/criar-conta', [UserController::class, 'create'])->name('create-account');

route::post('/criar-conta', [UserController::class, 'store'])->name('insert-account');

route::get('/login', function () {
    return view('login');
})->name('login');

route::post('/login', function () {
    return 'Validação do login!';
})->name('auth');

route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');