<?php

namespace App\Modules\Pub\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\Modules\Admin\User\Models\User;
use App\Modules\Pub\Auth\Services\AuthService;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $service;
    protected $redirectTo = 'admin/dashboard';

    public function __construct(AuthService $service){
        $this->service = $service;
    }

    public function showRegistrationForm(){
        return view('Pub::Auth.register');
    }


}
