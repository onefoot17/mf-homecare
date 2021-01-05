<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

use App\Services\Users\CertnService;

use Session;

class CertnController extends Controller
{
    public function __construct()
    {

    }

    public function CaregiverValidation(Request $request, CertnService $certnService)
    {
        // $request_object = json_decode($request->get('request'));
        // $token = $request_object->_token;
        // if(is_null($token) || $token!=csrf_token())
        //     throw new \Exception('illegal_pay_operation');
        // else
        //     Session::regenerateToken();

        $auth_response = $certnService->Authenticate();

        $certnService->backgroundCheck($auth_response);
    }
}
