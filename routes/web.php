<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsNotAuth;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Controllers\MainController;

Route::controller(AuthController::class)->group(function(){
    Route::post('verify-auth', 'verify_auth')->name('verify-auth');
});

Route::middleware(IsNotAuth::class)->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::view(uri: 'admin/dashboard', view: 'admin.files.dashboard')->name('admin.dashboard');
    });
});

Route::controller(MainController::class)->group(function() {
    Route::post('submit-demograpic-profile', 'submit_demograpic_profile')->name('submit-demograpic-profile');
    Route::post('submit-riskfactor-data',  'submit_riskfactor_data')->name('submit-riskfactor-data');
    Route::post('submit-cancer-diagnose-data', 'submit_cancer_diagnose_data')->name('submit-cancer-diagnose-data');
    Route::post('submit-treatment-data', 'submit_treatment_data')->name('submit-treatment-data');
    Route::get('form', 'form');
    Route::get('result', 'result')->name('result');
});

Route::view(uri: '/', view: 'forms.demographic');

Route::view(uri: "risk-factor", view: "forms.riskfactor")->name('risk-factor');
Route::view(uri: 'cancer-diagnose', view: 'forms.cancer-diagnose')->name('cancer-diagnose');
Route::view('treatment-diagnose', 'forms.treatment-diagnose')->name('treatment-diagnose');
Route::view('forms', 'forms.form');


Route::middleware(IsAuthenticated::class)->group(function () {
    Route::view(uri: '/admin', view: 'login')->name( name: 'login');
    Route::view(uri: 'register', view: 'register')->name(name: 'register');
    Route::view(uri: 'forgot-password', view: 'forgot')->name(name: 'forgot');
});

