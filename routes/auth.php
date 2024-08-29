<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Patient\HomeController;


Route::middleware(['auth', 'user-access:patient'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});
