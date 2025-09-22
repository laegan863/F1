<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsNotAuth;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Controllers\MainController;
use App\Http\Middleware\IsAdmin;

Route::controller(AuthController::class)->group(function(){
    Route::post('verify-auth', 'verify_auth')->name('verify-auth');
    Route::post('register', 'register')->name('register');
    Route::get("logout", "logout")->name('logout');
});

Route::middleware(IsNotAuth::class)->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::prefix('admin')->group(function(){
            Route::get('dashboard','dashboard')->name('admin.dashboard');
            Route::get('records','records')->name('admin.records');
            Route::middleware(IsAdmin::class)->group(function() {
                Route::get('users', 'users')->name('admin.users');
                Route::post('add-user', 'add_user')->name('admin.add-user');
                Route::get('delete/{id}/{table}', 'delete')->name('admin.delete');
                Route::post('edit/{id}', 'edit')->name('admin.edit-user');
            });
        });
    });
    Route::view(uri: 'demographic-profile', view: 'forms.demographic')->name('demographic-profile');
    Route::view(uri: "risk-factor", view: "forms.riskfactor")->name('risk-factor');
    Route::view(uri: 'cancer-diagnose', view: 'forms.cancer-diagnose')->name('cancer-diagnose');
    Route::view('treatment-diagnose', 'forms.treatment-diagnose')->name('treatment-diagnose');
    Route::view('first-page', 'forms.check-user-info')->name('first-page');
});

Route::controller(MainController::class)->group(function() {
    Route::post('submit-demograpic-profile', 'submit_demograpic_profile')->name('submit-demograpic-profile');
    Route::post('submit-riskfactor-data',  'submit_riskfactor_data')->name('submit-riskfactor-data');
    Route::post('submit-cancer-diagnose-data', 'submit_cancer_diagnose_data')->name('submit-cancer-diagnose-data');
    Route::post('submit-treatment-data', 'submit_treatment_data')->name('submit-treatment-data');
    Route::post('hospital-number', 'hospital_number')->name('admin.validate-hospital-number');
    Route::get('result/{id}', 'result')->name('result');
    Route::get('view/{id}', 'result')->name('view');
});

Route::middleware(IsAuthenticated::class)->group(function () {
    Route::view(uri: '/', view: 'login')->name( name: 'login');
    Route::view(uri: 'register', view: 'register')->name(name: 'register');
    Route::view(uri: 'forgot-password', view: 'forgot')->name(name: 'forgot');
});

