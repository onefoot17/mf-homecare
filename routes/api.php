<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

// use App\models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tokens/create', [LoginController::class, 'ApiTokenCreate'])->name('api_tokens_create');

Route::group(['prefix' => 'caregiver'], function(){
    Route::post('/registration-phase-1', [CaregiverController::class, 'storeRegistrationPhase1'])->name('api_caregiver_registration_phase_1_post');
});

