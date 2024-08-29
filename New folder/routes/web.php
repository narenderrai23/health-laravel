<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;

Route::get('admin/login', function () {
    if (Auth::check()) {
        return redirect()->route('admin.dashboard');
    }
    return view('auth.login');
});


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('insurance', [HomeController::class, 'insurance'])->name('insurance');
Route::get('about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('services/{slug}', [HomeController::class, 'services'])->name('services');
Route::get('equipments/{slug}', [HomeController::class, 'equipments'])->name('equipments');
Route::post('enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Auth::routes();

require __DIR__ . '/auth.php';
require __DIR__ . '/adminauth.php';
