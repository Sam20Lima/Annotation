<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

route::get('/criar-conta', function () {
    return view('create-account');
})->name('create-account');

route::post('/criar-conta', function () {
    return 'Validação e inserção do usuário!';
})->name('insert-account');

route::get('/login', function () {
    return view('login');
})->name('login');

route::post('/login', function () {
    return 'Validação do login!';
})->name('auth');

route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');