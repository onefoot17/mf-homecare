<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Users\Contracts\UserServiceInterface;
use App\Services\Users\Contracts\CertnServiceInterface;

class CaregiverController extends Controller
{
    //

    public function __construct()
    {

    }

    public function registrationPhase1()
    {
        return view('website.layouts.pages.registration_phase_1');
    }

    public function storeRegistrationPhase1(Request $request, UserServiceInterface $userService, CertnServiceInterface $certnService)
    {
        $result = $userService->storeUser($request);

        if($result instanceof \Illuminate\Support\MessageBag){
            return back()->withInput()->withErrors($result, 'storeUser');
        } else {

            $auth_response = $certnService->Authenticate();
            $certn_applicant = $certnService->backgroundCheck($auth_response, $result);

            $update_user = $userService->updateCertnApplicantId($result->id, $certn_applicant->json()['applicant']['id']);

            return redirect()->route('thank_you_phase_1', [
                'language' => request()->segment(1)
            ]);
        }
    }
}
