<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('frontend.index');
    }
}
