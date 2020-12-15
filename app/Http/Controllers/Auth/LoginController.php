<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
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
            return redirect()->intended(route('frontend_index'));
            
        } else {

            $errors = new MessageBag();
            $errors->add('password', 'These credentials do not match!');

            return back()->withErrors($errors);
        }
    }

    public function forgotPassword()
    {
        $this->middleware('guest');

        return view('auth.forgot-password');
    }
}
