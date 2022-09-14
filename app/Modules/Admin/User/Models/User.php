<?php

namespace App\Modules\Admin\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth as AuthUser;

class User extends AuthUser
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];

    protected $hidden = [
        'password'
    ];
}
