<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
    App\Http\Controllers\LoginController::class,
    'index'
])->name('app');


Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'login'
])->name('app.login');

Route::post('/login/verify', [
    App\Http\Controllers\LoginController::class,
    'login_verify'
])->name('app.login.verify');


Route::get('/registration', [
    App\Http\Controllers\LoginController::class,
    'registration'
])->name('app.registration');

Route::post('/registration/verify', [
    App\Http\Controllers\LoginController::class,
    'registration_verify'
])->name('app.registration.verify');