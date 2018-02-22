<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Salesman extends Model
{
    use Notifiable;

    protected $fillable = [
    	'user_id', 'score'
    ];

    public function users(){
    	return $this->hasOne('App\User');
    }

    public function notes(){
    	return $this->hasMany('App\Note');
    }

    public function oportunities(){
    	return $this->hasMany('App\Oportunity');
    }

    public function setUserIdAttribute($id){
    	$this->attributes["user_id"]=$id;
    }

    public function setScoreAttribute($score){
    	$this->attribures["score"]=$score;
    }
}
