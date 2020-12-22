<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function storeRegistrationPhase1(Request $request)
    {
        return back()->with('message-success');
    }
}
