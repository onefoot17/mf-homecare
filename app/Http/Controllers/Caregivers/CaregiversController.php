<?php

namespace App\Http\Controllers\Caregivers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaregiversController extends Controller
{
    public function index()
    {
        return view('caregivers.index');
    }
}
