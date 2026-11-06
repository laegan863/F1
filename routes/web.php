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
use App\Http\Controllers\FollowUpFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SupportMessageController;
use App\Http\Controllers\ActivityLogController;

Route::controller(AuthController::class)->group(function(){
    Route::post('verify-auth', 'verify_auth')->name('verify-auth');
    Route::get("logout", "logout")->name('logout');
});

Route::middleware(IsNotAuth::class)->group(function(){
    Route::controller(AdminController::class)->group(function(){
        Route::prefix('admin')->group(function(){
            Route::get('dashboard','dashboard')->name('admin.dashboard');
            Route::get('records','records')->name('admin.records');
            Route::get('forms/{id}', 'forms')->name('view.forms');
            Route::get('user-multiform/{hospitalID}/{form}', 'user_multiform')->name('user.multiform');
            Route::get('report', 'report')->name('select-date-report');
            Route::get('select-a-report', 'select_report')->name('select-report');
            Route::get('generate-report', 'generate_report')->name('generate-report');
            Route::middleware(IsAdmin::class)->group(function() {
                Route::get('users', 'users')->name('admin.users');
                Route::post('add-user', 'add_user')->name('admin.add-user');
                Route::delete('delete/{id}/{table}', 'delete')->whereNumber('id')->name('admin.delete');
                Route::delete('records/{id}', 'delete_record')->whereNumber('id')->name('admin.records.delete');
                Route::post('edit/{id}', 'edit')->name('admin.edit-user');
            });
        });

    });

    // The signed-in user's own profile and password
    Route::controller(ProfileController::class)->prefix('admin/profile')->group(function(){
        Route::get('/', 'show')->name('profile.show');
        Route::put('/', 'update')->name('profile.update');
        Route::put('password', 'updatePassword')->middleware('throttle:6,1')->name('profile.password');
    });

    // Support Messages Routes
    Route::controller(SupportMessageController::class)->group(function(){
        Route::prefix('support')->group(function(){
            // User routes
            Route::get('/', 'create')->name('support.create');
            Route::post('/', 'store')->name('support.store');
            Route::get('my-messages', 'myMessages')->name('support.my-messages');
        });

        // Admin routes
        Route::prefix('admin')->middleware(IsAdmin::class)->group(function(){
            Route::get('support-messages', 'index')->name('admin.support-messages');
            Route::get('support-messages/{id}', 'show')->name('admin.support-messages.show');
            Route::post('support-messages/{id}/respond', 'respond')->name('admin.support-messages.respond');
            Route::delete('support-messages/{id}', 'destroy')->name('admin.support-messages.delete');
        });
    });

    // Activity Logs Routes (Admin only)
    Route::controller(ActivityLogController::class)->group(function(){
        Route::prefix('admin')->middleware(IsAdmin::class)->group(function(){
            Route::get('activity-logs', 'index')->name('admin.activity-logs');
            Route::get('activity-logs/{id}', 'show')->name('admin.activity-logs.show');
            Route::post('activity-logs/cleanup', 'cleanup')->name('admin.activity-logs.cleanup');
            Route::get('activity-logs-export', 'export')->name('admin.activity-logs.export');
        });
    });

    Route::controller(ReportController::class)->group(function(){
        Route::get('generate-pdf', 'generate_pdf')->name('generate-pdf');
    });

    Route::prefix('report')->group(function(){
        Route::view('/', 'reports.rf-1a')->name('rf-1a');
        Route::view('rf-1b', 'reports.rf-1b')->name('rf-1b');
        Route::view('rf-1c', 'reports.rf-1c')->name('rf-1c');
        Route::view('rf-1d', 'reports.rf-1d')->name('rf-1d');
        Route::view('rf-1e', 'reports.rf-1e')->name('rf-1e');
        Route::view('rf-1f', 'reports.rf-1f')->name('rf-1f');
        Route::view('rf-2a', 'reports.rf-2a')->name('rf-2a');
        Route::view('rf-2b', 'reports.rf-2b')->name('rf-2b');
        Route::view('rf-2c', 'reports.rf-2c')->name('rf-2c');
        Route::view('rf-3a', 'reports.rf-3a')->name('rf-3a');
        Route::view('rf-0a', 'reports.rf-0a')->name('rf-0a');
        Route::view('rf-0b', 'reports.rf-0b')->name('rf-0b');
    });

    // Form 1 "Add Record" wizard (step pages are guarded and pre-filled by MainController)
    Route::prefix("form1")->controller(MainController::class)->group(function(){
        Route::view('validate-hospital-number', 'forms.check-user-info')->name('first-page');
        Route::get('demographic-profile', 'demographic_page')->name('demographic-profile');
        Route::get("risk-factor", 'riskfactor_page')->name('risk-factor');
        Route::get('cancer-diagnose', 'cancer_diagnose_page')->name('cancer-diagnose');
        Route::get('treatment-diagnose', 'treatment_page')->name('treatment-diagnose');
    });

    Route::controller(MainController::class)->group(function() {
        Route::post('submit-demograpic-profile', 'submit_demograpic_profile')->name('submit-demograpic-profile');
        Route::post('submit-riskfactor-data',  'submit_riskfactor_data')->name('submit-riskfactor-data');
        Route::post('submit-cancer-diagnose-data', 'submit_cancer_diagnose_data')->name('submit-cancer-diagnose-data');
        Route::post('submit-treatment-data', 'submit_treatment_data')->name('submit-treatment-data');
        Route::post('hospital-number', 'hospital_number')->name('admin.validate-hospital-number');
        Route::get('view/{id}', 'result')->name('view');

        // Edit / update a saved Form 1 record, one step at a time
        $steps = 'demographic|riskfactor|cancer-diagnose|treatment';
        Route::get('records/{id}/edit/{step}', 'edit_step')->whereNumber('id')->where('step', $steps)->name('records.edit');
        Route::post('records/{id}/update/{step}', 'update_step')->whereNumber('id')->where('step', $steps)->name('records.update');
        Route::get('edit-demographic-profile/{hospitalID}', 'edit_demographic_profile')->name('edit-demographic-profile');

        Route::prefix('form1')->group(function(){
            Route::get('result/{id}', 'result')->name('result.form1');
            Route::get('result1/{id}', 'result')->name('result.form2');
            Route::get('result2/{id}', 'result')->name('result.form3');
            Route::get('result3/{id}', 'result')->name('result.form4');
        });

    });

    Route::prefix("form2")->controller(FollowUpFormController::class)->group(function(){
        Route::get('form/{id}', 'print')->whereNumber('id')->defaults('form', 'form2')->name('form2');
        Route::get("follow-up", 'page')->defaults('form', 'form2')->defaults('page', 1)->name('form2-firstpage');
        Route::get("patient-eco-status", 'page')->defaults('form', 'form2')->defaults('page', 2)->name('form2-secondpage');
        Route::get("radio-theranotics", 'page')->defaults('form', 'form2')->defaults('page', 3)->name('form2-thirdpage');
        Route::get("other-cancer", 'page')->defaults('form', 'form2')->defaults('page', 4)->name('form2.fourthpage');
        Route::get("change-treatment-plan", 'page')->defaults('form', 'form2')->defaults('page', 5)->name('form2.fifthpage');
        Route::get("cancer-diagnose-outome", 'page')->defaults('form', 'form2')->defaults('page', 6)->name('form2.sixpage');
    });

    Route::controller(Form2Controller::class)->group(function(){
        Route::post('submit-follow-up/{hospitalID}', 'submit_follow_up')->name('submit.follow-up');
        Route::post('store-patient-eco-status', 'store_patient_eco_status')->name('store.patient-eco-status');
        Route::post("store-radiotheraphy", "store_radiotheraphy")->name("store.radiotheraphy");
        Route::post('store-other-theraphy', "store_other_theraphy")->name("store.other-theraphy");
        Route::post('form2-store-change-treatment-plan', 'change_treatment_plan')->name('form2.store.change-treatment-plan');
        Route::post('form2-store-cancer-diagnose-outcome', 'store_cancer_diagnose')->name('store-cancer-diagnose-outcome');
    });

    Route::prefix("form3")->controller(FollowUpFormController::class)->group(function(){
        Route::get('form', 'print')->defaults('form', 'form3')->name('form3');
        Route::get("patient-surveillance-form", 'page')->defaults('form', 'form3')->defaults('page', 1)->name('form3-firstpage');
        Route::get("cancer-diagnose-outome", 'page')->defaults('form', 'form3')->defaults('page', 2)->name('form3.secondpage');
        Route::get("cancer-treatment-history", 'page')->defaults('form', 'form3')->defaults('page', 3)->name('form3.page3');
        Route::get("financial-support-mechanism", 'page')->defaults('form', 'form3')->defaults('page', 4)->name('form3.page4');
    });

    Route::controller(Form3Controller::class)->group(function(){
        Route::post('store-f3patientsurveillanceforms/{hospitalID}', 'f3patientsurveillanceforms')->name('store.f3patientsurveillanceforms');
        Route::post('store-cancerdiagnoseoutcome', 'cancerdiagnoseoutcome')->name('store.cancerdiagnoseoutcome');
        Route::post('store-treatment-history', 'treatment_history')->name('store.treatment-history');
        Route::post('store.financial-support', 'financial_support')->name('store.financial-support');
    });
    
    Route::prefix("form4")->controller(FollowUpFormController::class)->group(function(){
        Route::get('form', 'print')->defaults('form', 'form4')->name('form4');
        Route::get("palliative-form", 'page')->defaults('form', 'form4')->defaults('page', 1)->name('form4-firstpage');
        Route::get("esas-r", 'page')->defaults('form', 'form4')->defaults('page', 2)->name('form4.page2');
        Route::get("prqst", 'page')->defaults('form', 'form4')->defaults('page', 3)->name('form4.page3');
        Route::get("palliative-care-intervention", 'page')->defaults('form', 'form4')->defaults('page', 4)->name('form4.page4');
        Route::get("cancer-diagnose-outcome", 'page')->defaults('form', 'form4')->defaults('page', 5)->name('form4.page5');
        Route::get("financial-support-mechanism", 'page')->defaults('form', 'form4')->defaults('page', 6)->name('form4.page6');
    });

    // Edit / delete saved Form 2-4 entries
    Route::controller(FollowUpFormController::class)->prefix('followup/{form}')->where(['form' => 'form[234]'])->group(function(){
        Route::get('{id}/edit/{page?}', 'edit')->whereNumber(['id', 'page'])->name('followup.edit');
        Route::delete('{id}', 'destroy')->whereNumber('id')->middleware(IsAdmin::class)->name('followup.destroy');
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
    // Public self-registration is disabled: accounts are created by an admin under User Management.
    Route::view(uri: 'forgot-password', view: 'forgot')->name(name: 'forgot');
});