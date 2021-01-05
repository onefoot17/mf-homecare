<?php

namespace App\Services\Users;

use App\Services\Users\Contracts\CertnServiceInterface;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class CertnService implements CertnServiceInterface
{
    public function __construct()
    {

    }

    public function Authenticate()
    {
        $response = Http::asForm()
        ->withOptions([
            'debug' => false
        ])
        ->withBasicAuth(env('CERTN_CLIENT_ID'), env('CERTN_CLIENT_SECRET'))
        ->withHeaders([
            // 'Authorization' => 'Basic ' . base64_encode( env('CERTN_CLIENT_ID') . ':' . env('CERTN_CLIENT_SECRET') ),
            'Content-type' => 'application/json'
        ])
        ->post(env('CERTN_ADDRESS').'/api/v1/authenticate');

        return $response;
    }

    public function backgroundCheck(Response $authentication)
    {
        if($authentication->status == 200){
            $auth = $authentication->json();
            
        }
    }

}