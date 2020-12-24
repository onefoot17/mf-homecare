<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Users\Contracts\UserServiceInterface;

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

    public function storeRegistrationPhase1(Request $request, UserServiceInterface $userService)
    {

        $result = $userService->storeUser($request);

        if($result instanceof \Illuminate\Support\MessageBag){
            return back()->withInput()->withErrors($result, 'storeUser');
        } else {
            return back()->with('message-success', __('User stored succefully!'));
        }
    }
}
