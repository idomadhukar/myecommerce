<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['name','email','password'];
    protected $hidden = ['password'];

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
