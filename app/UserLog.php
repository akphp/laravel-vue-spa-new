<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    protected $fillable = [
        'name', 'user_id' ,  'login_at', 'logout_at',
    ];

    protected $dates = [
        'login_at' ,
        'logout_at',
    ]
}
