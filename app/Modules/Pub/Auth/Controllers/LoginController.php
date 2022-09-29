<?php

namespace App\Modules\Pub\Auth\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\Modules\Admin\User\Models\User;
use Auth;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = 'admin/dashboard';

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('Pub::Auth.login');
    }


    //Google Auth
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('auths.login');
        }
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            Auth::login($existingUser);
            return redirect()->to($this->redirectTo);
        }else {
            //Register User
        }
    }


}