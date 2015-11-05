<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getEmail(){
        $email = \App\Usuario::all();
        return view ('email.esqueceu')->with('email', $email);
    }

    public function postEmail(){

    }

    public function getReset(){
        $token = \App\Usuario::all();
        return view ('email.reset')->with('token', $token);
    }

    public function postReset(){

    }
}
