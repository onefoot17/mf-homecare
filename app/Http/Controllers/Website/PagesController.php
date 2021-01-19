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
}
