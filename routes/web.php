<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsNotAuth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAuthenticated;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Form2Controller;
use App\Http\Controllers\Form3Controller;
use App\Http\Controllers\Form4Controller;

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
            Route::get('forms/{id}', 'forms')->name('view.forms');
            Route::get('user-multiform/{hospitalID}/{form}', 'user_multiform')->name('user.multiform');
            Route::middleware(IsAdmin::class)->group(function() {
                Route::get('users', 'users')->name('admin.users');
                Route::post('add-user', 'add_user')->name('admin.add-user');
                Route::get('delete/{id}/{table}', 'delete')->name('admin.delete');
                Route::post('edit/{id}', 'edit')->name('admin.edit-user');
            });
        });

        Route::get('connection', 'connection');
    });

    Route::prefix("form1")->group(function(){
        Route::view('demographic-profile', 'forms.demographic')->name('demographic-profile');
        Route::view("risk-factor", "forms.riskfactor")->name('risk-factor');
        Route::view('cancer-diagnose', 'forms.cancer-diagnose')->name('cancer-diagnose');
        Route::view('treatment-diagnose', 'forms.treatment-diagnose')->name('treatment-diagnose');
        Route::view('validate-hospital-number', 'forms.check-user-info')->name('first-page');
    });

    Route::controller(MainController::class)->group(function() {
        Route::post('submit-demograpic-profile', 'submit_demograpic_profile')->name('submit-demograpic-profile');
        Route::post('submit-riskfactor-data',  'submit_riskfactor_data')->name('submit-riskfactor-data');
        Route::post('submit-cancer-diagnose-data', 'submit_cancer_diagnose_data')->name('submit-cancer-diagnose-data');
        Route::post('submit-treatment-data', 'submit_treatment_data')->name('submit-treatment-data');
        Route::post('hospital-number', 'hospital_number')->name('admin.validate-hospital-number');
        Route::get('view/{id}', 'result')->name('view');

        Route::prefix('form1')->group(function(){
            Route::get('result/{id}', 'result')->name('result.form1');
            Route::get('result1/{id}', 'result')->name('result.form2');
            Route::get('result2/{id}', 'result')->name('result.form3');
            Route::get('result3/{id}', 'result')->name('result.form4');
        });

    });

    Route::prefix("form2")->group(function(){
        Route::view('form/{id}', 'forms.form2.form')->name('form2');
        Route::view("follow-up", "forms.form2.follow-up")->name('form2-firstpage');
        Route::view("patient-eco-status", "forms.form2.patient-eco-status")->name('form2-secondpage');
        Route::view("radio-theranotics","forms.form2.radio-theranotics")->name('form2-thirdpage');
        Route::view("other-cancer", "forms.form2.other-cancer-directed-thyrapies")->name('form2.fourthpage');
        Route::view("change-treatment-plan", "forms.form2.change-treatment-plan")->name('form2.fifthpage');
        Route::view("cancer-diagnose-outome", "forms.form2.cancer-diagnose-outcome")->name('form2.sixpage');
    });

    Route::controller(Form2Controller::class)->group(function(){
        Route::post('submit-follow-up/{hospitalID}', 'submit_follow_up')->name('submit.follow-up');
        Route::post('store-patient-eco-status', 'store_patient_eco_status')->name('store.patient-eco-status');
        Route::post("store-radiotheraphy", "store_radiotheraphy")->name("store.radiotheraphy");
        Route::post('store-other-theraphy', "store_other_theraphy")->name("store.other-theraphy");
        Route::post('form2-store-change-treatment-plan', 'change_treatment_plan')->name('form2.store.change-treatment-plan');
        Route::post('form2-store-cancer-diagnose-outcome', 'store_cancer_diagnose')->name('store-cancer-diagnose-outcome');
    });

    Route::prefix("form3")->group(function(){
        Route::view('form', 'forms.form3.form')->name('form3');
        Route::view("patient-surveillance-form", "forms.form3.patient-surveillance-form")->name('form3-firstpage');
        Route::view("cancer-diagnose-outome", "forms.form3.cancer-diagnose-outcome")->name('form3.secondpage');
        Route::view("cancer-treatment-history", "forms.form3.cancer-treatment-history")->name('form3.page3');
        Route::view("financial-support-mechanism", "forms.form3.financial-support-mechanism")->name('form3.page4');
    });

    Route::controller(Form3Controller::class)->group(function(){
        Route::post('store-f3patientsurveillanceforms/{hospitalID}', 'f3patientsurveillanceforms')->name('store.f3patientsurveillanceforms');
        Route::post('store-cancerdiagnoseoutcome', 'cancerdiagnoseoutcome')->name('store.cancerdiagnoseoutcome');
        Route::post('store-treatment-history', 'treatment_history')->name('store.treatment-history');
        Route::post('store.financial-support', 'financial_support')->name('store.financial-support');
    });
    
    Route::prefix("form4")->group(function(){
        Route::view('form', 'forms.form4.form')->name('form4');
        Route::view("palliative-form", "forms.form4.palliative-form")->name('form4-firstpage');
        Route::view("esas-r", "forms.form4.esas-r")->name('form4.page2');
        Route::view("prqst", "forms.form4.pain-assessment")->name('form4.page3');
        Route::view("palliative-care-intervention", "forms.form4.palliative-care-intervention")->name('form4.page4');
        Route::view("cancer-diagnose-outcome", "forms.form4.cancer-diagnose-outcome")->name('form4.page5');
        Route::view("financial-support-mechanism", "forms.form4.financial-support-mechanism")->name('form4.page6');
    });

    Route::controller(Form4Controller::class)->group(function(){
        Route::post('store-palliative-form/{hospitalID}', 'palliative_form')->name('store.palliative-form');
        Route::post('store-esas', 'esas')->name('store.esas');
        Route::post('store-pain-assessment', 'pain_assessment')->name('store.pain-assessment');
        Route::post('store-palliative-care', 'palliative_care')->name('store.palliative-care');
        Route::post('store-cancer-diagnose-outcome', 'cancer_diagnose_outcome')->name('store.cancer-diagnose-outcome');
        Route::post('store-financial-support-mechanism', 'financial_support_mechanism')->name('store.financial-support-mechanism');
    });

});

Route::middleware(IsAuthenticated::class)->group(function () {
    Route::view(uri: '/', view: 'login')->name( name: 'login');
    Route::view(uri: 'register', view: 'register')->name(name: 'register');
    Route::view(uri: 'forgot-password', view: 'forgot')->name(name: 'forgot');
});