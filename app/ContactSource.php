<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactSource extends Model
{
    //The attributes name,category cam be filled in into the table by the user
    protected $filled = ["name","category"];

    public function company(){
    	return $this->hasOne("App/Company");
    }

    public function niche(){
    	return $this->hasOne("App/Niche")
    }

    //---------------Setters-------------//

    //Set name
    public function setName($name){
    	$this->attribute['name'];
    }

    //Set company
    public function setCategoru($categoru){
    	$this->attributes['category'];
    }
    
}
