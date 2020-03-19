<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Besoin extends Model 
{

    protected $table = 'besoins';
    public $timestamps = true;
    protected $fillable = array('libelle', 'type', 'region', 'quantite', 'cout', 'etat', 'user_id');

    public function dons()
    {
        return $this->hasMany('App\Don');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}