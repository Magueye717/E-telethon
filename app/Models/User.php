<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;

    public function besoins()
    {
        return $this->hasMany('Besoin');
    }

    public function donateurs()
    {
        return $this->hasMany('Donateur');
    }

}