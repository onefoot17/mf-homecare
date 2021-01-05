<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct()
    {

    }

    public function thankYouPhase1(Request $request)
    {
        return view('website.messages.thank_you_phase_1');
    }
}
