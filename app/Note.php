<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Note extends Model
{
    use Notifiable;

    protected $fillable = [
    	'oportunity_id', 'content', 'remind_at','salesman_id'
    ];

    public function salesmen(){
    	return $this->belongsTo('App\Salesman');
    }

    public function setOportunityIdAttribute($id){
    	$this->attributes["oportunity_id"]= $id;
    }

    public function setContentAttribute($content){
    	$this->attributes["content"]= $content;
    }

    public function setRemindAtAttribute($date){
    	$this->attributes["remind_at"]=$date;
    }

    public function setSalesmanIdAttribute($id){
    	$this->attributes["salesman_id"]=$id;
    }
}
