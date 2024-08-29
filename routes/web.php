<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\AppointmentController;

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


Route::get('appointments', [AppointmentController::class, 'appointments'])->name('appointments.index');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.book');
Route::get('/appointment/{id}/details', [AppointmentController::class, 'details'])->name('appointment.details');
Route::get('appointment-pdf/{id}', [AppointmentController::class, 'appointmentPdf'])->name('admin.appointmentPdf');

Auth::routes();

require __DIR__ . '/auth.php';
require __DIR__ . '/adminauth.php';
