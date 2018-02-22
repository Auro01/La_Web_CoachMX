<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'created_at', 'updated_at', 'type', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function marketers(){
        return $this->hasOne('App\Marketer');
    }

    public function salesmen(){
        return $this->hasOne('App\Salesman')
    }

    public function companies(){
        return $this->belongsTo('App\Company');
    }

    public function passord_resets(){
        return $this->hasMany('App\PasswordReset')
    }

    public function setNameAttribute($name){
        $this->attributes["name"] = $name;
    }

    public function setEmailAttribute($email){
        $this->attributes["email"] = $email;
    }

    public function setPasswordAttribute($password){
        $this->attributes["password"] = $password;
    }

    public function setTypeAttribute($type){
        $this->attributes["type"]= $type;
    }

    public function setCompanyIdAttribute($id){
        $this->attributes["company_id"]= $id;
    }
}
