<?php

namespace App\Modules\Pub\Auth\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $redirectTo = 'admin/dashboard';

    public function __constrquct(){
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('Pub::Auth.login');
    }




}