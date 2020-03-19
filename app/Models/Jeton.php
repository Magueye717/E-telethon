<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jeton extends Model 
{

    protected $table = 'jetons';
    public $timestamps = true;
    protected $fillable = array('montant', 'libelle');

    public function dons()
    {
        return $this->belongsToMany('App\Don');
    }

}