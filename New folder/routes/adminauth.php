<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FunFactController;
use App\Http\Controllers\Admin\InsuranceController;
use App\Http\Controllers\Admin\MissionVisionController;

Route::group(['middleware' => ['user-access:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('insurances', InsuranceController::class);
    Route::resource('equipments', EquipmentController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('about', AboutController::class);
    Route::resource('funfact', FunFactController::class);
    Route::resource('missionvisions', MissionVisionController::class);
    Route::get('/enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
    Route::delete('/enquiry/{id}', [EnquiryController::class, 'destroy'])->name('enquiry.destroy');
    Route::get('/equipment/{slug}', [EquipmentController::class, 'fetch'])->name('equipment.fetch');
});
