<?php

namespace App\Services\Users;

use App\Services\Users\Contracts\CertnServiceInterface;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

use App\Models\User;

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

    public function backgroundCheck(Response $authentication, User $user)
    {
        if($authentication->status() === 200){
            $auth = $authentication->json();

            $email = $user->email;
            $first_name = $user->first_name;
            $last_name = $user->last_name;

            $response = Http::asForm()
            ->withOptions([
                'debug' => false
            ])
            ->withHeaders([
                'Authorization' => 'Token '.$auth['token']
            ])
            ->post(env('CERTN_ADDRESS').'/hr/v1/applications/invite/', [
                'email' => $email,
                'request_identity_verification' => true,
                'request_criminal_record_check' => true,
                'information' => [
                    'first_name'=> $first_name, 
                    'last_name' => $last_name
                ]
            ]);

            return $response;
        }
    }

}