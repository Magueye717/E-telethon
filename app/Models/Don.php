<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Don extends Model 
{

    protected $table = 'dons';
    public $timestamps = true;
    protected $fillable = array('donateur_id', 'montant', 'besoin_id', 'type_don', 'nombre_unite', 'statut');

    public function Donateurs()
    {
        return $this->belongsToMany('App\Donateur');
    }

    public function Besoins()
    {
        return $this->belongsToMany('App\Besoin');
    }

    public function jetons()
    {
        return $this->belongsToMany('App\Jeton');
    }

}