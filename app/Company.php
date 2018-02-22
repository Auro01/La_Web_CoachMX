<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //The attributes name,phone,conctact name,contact email and address are attributes that can be filled in into the table
    protected $fillable = ["name","phone","contact_name","contact_email","address"];

    //Table relations

    //One company has many clients
    public function client(){
    	return $this->hasMany("App/Client");
    }

    //One company has many contact sources
    public function contactSource(){
    	return $this->hasMany("App/ContactSource");
    }

    //One company has many users
    public function user(){
    	return $this->hasMany("App/User");
    }

    //One company has many niches
    public function niche(){
    	return $this->hasMany("App/Niche");
    }

    //------------------Setters-------------------------//

    //Set Name
    public function setName($name){
    	$this->attributes['name'];
    }

    //Set Phone
    public function setPhone($phone){
    	$this->attributes['phone'];
    }

    //Set Contact Name
    public function setContactName($contactName){
    	$this->attributes['contact_name'];
    }

    //Set Contact Email
    public function setContactEmail($contactEmail){
    	$this->attributes['contact_email'];
    }

    //Set address
    public function setAddress($address){
    	$this->attributes['address'];
    }

}
