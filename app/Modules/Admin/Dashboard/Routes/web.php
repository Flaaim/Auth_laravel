<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Admin\Dashboard\Controllers\DashboardController;

Route::group(['prefix'=> 'dashboard', 'middleware' => []], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});