<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function howWeWork()
    {
        return view('website.layouts.pages.how_we_work');
    }

    public function contactUs()
    {
        return view('website.layouts.pages.contact_us');
    }

    public function cancellationPolicy()
    {
        return view('website.layouts.pages.cancellation_policy');
    }

    public function termsConditions()
    {
        return view('website.layouts.pages.terms_conditions');
    }

    public function privacyPolicy()
    {
        return view('website.layouts.pages.privacy_policy');
    }
}
