<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    protected $table = 'users';

    protected $fillable = [
        'email',
        'password',
        'name',
        'permission',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
