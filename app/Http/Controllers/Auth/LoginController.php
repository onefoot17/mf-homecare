<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        // $credentials = ['email' => $request->email, 'password' => $request->password, 'active' => 1];
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if(Auth::attempt($credentials, $request->remember_me)){

            // Authentication passed...
            return redirect()->intended(route('index', [Auth::User()->settings->language]));

        } else {

            $errors = new MessageBag();
            $errors->add('password', 'These credentials do not match!');

            return back()->withErrors($errors);
        }
    }

    public function ApiTokenCreate(Request $request)
    {
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if(Auth::attempt($credentials, false)){

            $request->user()->tokens()->delete();

            $token = $request->user()->createToken($request->token_name);
            return response()->json(['token' => $token->plainTextToken], 200);
        } else {
            return response()->json('These credentials do not match!', 401);
        }
    }

    public function forgotPassword()
    {
        $this->middleware('guest');

        return view('auth.forgot-password');
    }
}
