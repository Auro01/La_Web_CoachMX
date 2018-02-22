<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PasswordReset extends Model
{
    use Notifiable;

    protected $hidden = [
    	'token'
    ];

    public function users(){
    	return $this->belongsTo('App\User');
    }
}
