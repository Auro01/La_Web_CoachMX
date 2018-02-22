<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

	// The "name" attribute can be edited or filled
	protected $fillable = ["name","company"];

    //Table relations
	//Many clients belong to a company
    public function company(){
    	return $this->hasOne('App\Company');
    }

    //One client has many contacts
    public function contact(){
    	return $this->hasMany('App\Contact')
    }

    //------------------Setters-------------------------//

    //Set Name
    public function setName($name){
    	$this->attributes["name"];
    }
    //Set Company
    public function setCompany($company){
    	$this->attributes["company"];
    }

}
