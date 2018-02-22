<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Marketer extends Model
{
    use Notifiable;

    protected $fillable = [
    	'user_id'
    ];

    public function users(){
    	return $this->hasOne('App\User');
    }

    public function setUserIdAttribute($id){
    	$this->attributes["user_id"]=$id;
    }
}
