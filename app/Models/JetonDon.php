<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JetonDon extends Model 
{

    protected $table = 'jeton_dons';
    public $timestamps = true;
    protected $fillable = array('nombre_unite');

    public function jetons()
    {
        return $this->belongsToMany('App\Jeton');
    }

    public function dons()
    {
        return $this->belongsToMany('App\Don');
    }

}