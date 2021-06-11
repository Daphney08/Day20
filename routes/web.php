<?php

use Illuminate\Support\Facades\Route;


     Route::get('/', [
            App\Http\Controllers\ChatController::class,
            'index'
       ])->name('app');

       Route::post('/send', [
          App\Http\Controllers\ChatController::class,
          'send'
     ])->name('app.send');

// Route::group(['middleware' => 'user'], function(){
//     Route::get('/', [
//         App\Http\Controllers\ChatController::class,
//         'index'
//     ])->name('app');
// });

// Route::group(['middleware' => 'guest'], function(){
//     Route::get('/login', [
//         App\Http\Controllers\LoginController::class,
//         'login'
//     ])->name('login');

//     Route::post('/login/verify', [
//         App\Http\Controllers\LoginController::class,
//         'login_verify'
//     ])->name('login.verify');

//     Route::get('/registration', [
//         App\Http\Controllers\LoginController::class,
//         'registration'
//     ])->name('registration');

    
// });