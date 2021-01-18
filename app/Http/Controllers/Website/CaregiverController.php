<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

use App\Services\Users\Contracts\UserServiceInterface;
use App\Services\Users\Contracts\CertnServiceInterface;
use App\Services\Caregivers\Contracts\CaregiverServiceInterface;

use App\Mail\Caregiver\RegistrationPhase1;

class CaregiverController extends Controller
{
    //

    public function __construct()
    {

    }

    public function registrationPhase1()
    {
        $intent = null;

        if(env('DOWN_PAYMENT') === true)
        {
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $intent = \Stripe\PaymentIntent::create([
                'amount' => 2500,
                'currency' => 'cad',
                'payment_method_types' => ['card']
            ]);
        }

        return view('website.layouts.pages.registration_phase_1', compact('intent'));
    }

    // public function storeRegistrationPhase1(Request $request, UserServiceInterface $userService, CertnServiceInterface $certnService, CaregiverServiceInterface $caregiverService)
    // {
    //     $result = $userService->storeUser($request);

    //     if($result instanceof \Illuminate\Support\MessageBag){
    //         return back()->withInput()->withErrors($result, 'storeUser');
    //     } else {

    //         $auth_response = $certnService->Authenticate();
    //         $certn_applicant = $certnService->backgroundCheck($auth_response, $result);

    //         $caregiver = $caregiverService->storeCaregiver($result);
    //         $update_user = $caregiverService->updateCertnApplicantId($caregiver->id, $certn_applicant->json()['applicant']['id']);

    //         Mail::to($result->email)->send(new RegistrationPhase1($result, $certn_applicant));

    //         return redirect()->route('thank_you_phase_1', [
    //             'language' => request()->segment(1)
    //         ]);
    //     }
    // }

    public function storeRegistrationPhase1(Request $request)
    {

        \URL::forceRootUrl(env('APP_PRIVATE_URL'));

        $response_auth = Http::post(route('api_tokens_create'), [
            'email' => 'felipe@vcompinc.com',
            'password' => '123456788',
            'token_name' => 'Test123'
        ]);

        $token = (isset($response_auth->json()['token']))?$response_auth->json()['token']:null;

        $response = Http::withToken($token)
            ->post(route('api_caregiver_registration_phase_1_post'),[
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'postal_code' => $request->postal_code
        ]);

        if($response->status() >= 400){
            return redirect()->back()->withInput()->withErrors($response->json(), 'storeUser');
        }

        return redirect()->route('thank_you_phase_1', [
            'language' => request()->segment(1)
        ]);
    }

    public function storeRegistrationPhase1Ajax(Request $request, UserServiceInterface $userService)
    {
        $result = $userService->storeUserAjax($request);

        if($result->status > 0){
            return 'false';
        } else {
            return 'true';
        }
    }

    public function storeCertnAjax(CertnServiceInterface $certnService, CaregiverServiceInterface $caregiverService)
    {
        $auth_response = $certnService->Authenticate();
        $certn_applicant = $certnService->backgroundCheck($auth_response, $result);

        $update_user = $caregiverService->updateCertnApplicantId($result->id, $certn_applicant->json()['applicant']['id']);
    }

    public function updateRegistrationPhase1StripeIdAjax(Request $request)
    {

    }

    public function stripePaymentPhase1(Request $request)
    {
        return json_encode($request->toArray());
    }

    public function registrationPhase2()
    {
        $intent = null;

        return view('website.layouts.pages.registration_phase_2', compact('intent'));
    }
}
