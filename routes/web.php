<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\Users\MyProfileController;
use App\Http\Controllers\Admin\Users\SettingsController;
use App\Http\Controllers\Admin\Users\UsersController;

use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Website\CaregiverController;
use App\Http\Controllers\Website\MessagesController;
use App\Http\Controllers\Website\CallbacksController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/', function () {
    if(Auth::check()){
        return redirect()->route('home', [Auth::User()->settings->language]);
    } else {
        return redirect()->route('home', ['en']);
    }
})->name('index');

Route::get('/forgot-password', [LoginController::class, 'forgotPassword'])->name('password.request');

Route::group(['prefix' => 'certn'], function(){
    Route::post('webhook', [CallbacksController::class, 'CertnWebhook'])->name('certn_webhook');
});

Route::group(['prefix' => '{language}'], function(){

    App::setLocale(Request::segment(1));

    Route::get('/', [IndexController::class, 'index'])->name('home');

    Route::group(['prefix' => 'caregiver'], function(){
        Route::get('/registration-phase-1', [CaregiverController::class, 'registrationPhase1'])->name('caregiver_registration_phase_1');
        Route::post('/registration-phase-1', [CaregiverController::class, 'storeRegistrationPhase1'])->name('caregiver_registration_phase_1_post');
        Route::post('/registration-phase-1-ajax', [CaregiverController::class, 'storeRegistrationPhase1Ajax'])->name('caregiver_registration_phase_1_post_ajax');
        Route::post('/stripe-payment-phase-1', [CaregiverController::class, 'stripePaymentPhase1'])->name('stripe_payment_phase_1');
    });

    Route::get('/thank-you-phase-1', [MessagesController::class, 'thankYouPhase1'])->name('thank_you_phase_1');

    Route::group(['prefix' => 'admin'], function(){

        Route::get('/', function () {
            return view('admin.layouts.pages.index');
        })->name('admin_home')->middleware('auth');

        Route::group(['prefix' => 'my-profile'], function(){
            Route::get('/', [MyProfileController::class, 'edit'])->name('my_profile_edit');
            Route::put('/edit', [MyProfileController::class, 'update'])->name('my_profile_update');
        });

        Route::group(['prefix' => 'settings'], function(){
            Route::get('/', [SettingsController::class, 'edit'])->name('settings_edit');
            Route::put('/edit/{id}', [SettingsController::class, 'update'])->name('settings_update');
        });

        Route::group(['prefix' => 'users'], function(){
            Route::get('/', [UsersController::class, 'index'])->name('admin_users_index');
            Route::post('/store', [UsersController::class, 'store'])->name('admin_users_store');
            Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('admin_users_edit');
            Route::put('/update/{id}', [UsersController::class, 'update'])->name('admin_users_update');
            Route::delete('/destroy/{id}', [UsersController::class, 'destroy'])->name('admin_users_destroy');
        });
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
