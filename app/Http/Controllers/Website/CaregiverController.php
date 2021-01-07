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
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $intent = \Stripe\PaymentIntent::create([
            'amount' => 2500,
            'currency' => 'cad',
            'payment_method_types' => ['card']
        ]);

        return view('website.layouts.pages.registration_phase_1', compact('intent'));
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

    public function stripePaymentPhase1(Request $request)
    {
        return json_encode($request->toArray());
    }
}
