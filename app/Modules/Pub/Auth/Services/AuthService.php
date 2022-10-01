<?php

namespace App\Modules\Pub\Auth\Services;

use App\Modules\Admin\User\Models\User;

class AuthService {

    public function create(array $data) {
        
        return User::create([
            'firstname' => 'Alexander',
            'lastname' => 'Grigorev',
            'email' => 'flaaim@list.ru',
            'password' => bcrypt('secret')
        ]);  
    }
}