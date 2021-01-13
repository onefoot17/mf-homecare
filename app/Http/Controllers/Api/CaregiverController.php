<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Services\Users\Contracts\UserServiceInterface;
use App\Services\Users\Contracts\CertnServiceInterface;
use App\Services\Caregivers\Contracts\CaregiverServiceInterface;

use App\Mail\Caregiver\RegistrationPhase1;

class CaregiverController extends Controller
{
    public function __construct()
    {

    }

    public function storeRegistrationPhase1(Request $request, UserServiceInterface $userService, CertnServiceInterface $certnService, CaregiverServiceInterface $caregiverService)
    {
        $result = $userService->storeUser($request);

        if($result instanceof \Illuminate\Support\MessageBag){
            return response()->json($result, 409);
        } else {

            $auth_response = $certnService->Authenticate();
            $certn_applicant = $certnService->backgroundCheck($auth_response, $result);

            $caregiver = $caregiverService->storeCaregiver($result);
            $update_user = $caregiverService->updateCertnApplicantId($caregiver->id, $certn_applicant->json()['applicant']['id']);

            Mail::to($result->email)->send(new RegistrationPhase1($result, $certn_applicant));

            $return = json_encode([
                'caregiver' => $caregiver,
                'certn_applicant' => $certn_applicant->json()
            ]);

            return $return;
        }
    }
}
