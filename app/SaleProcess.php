<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SaleProcess extends Model
{
    use Notifiable;

    protected $primaryKey = 'niche_id', 'stage';
    protected $fillable = [
    	'name', 'description'
    ];

    public function niches(){
    	return $this->belongsTo('App\Nich');
    }

    public function setNameAttribute($name){
    	$this->attribute["name"]=$name;
    }

    public function setDescriptionAttribute($description){
    	$this->attribute["description"]= $description;
    }
}
