<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Users\Contracts\CertnServiceInterface;

class CallbacksController extends Controller
{
    public function __construct()
    {

    }

    public function CertnWebhook(Request $request, CertnServiceInterface $certnService)
    {
        $certnService->storeCallbacksLocalDatabase($request);
    }
}
