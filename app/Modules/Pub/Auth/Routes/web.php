<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Pub\Auth\Controllers\LoginController;
use App\Modules\Pub\Auth\Controllers\RegisterController;

Route::group(['prefix'=> 'auths', 'middleware' => []], function(){
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('auths.login');
    Route::post('/', [LoginController::class, 'login'])->name('auths.store');

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auths.register');
    Route::post('/register', [RegisterController::class, 'register'])->name('auths.store_register');
});

