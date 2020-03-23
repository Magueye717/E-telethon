<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model 
{

    protected $table = 'contacts';
    public $timestamps = true;
    protected $fillable = array('prenom', 'nom', 'Tel', 'email', 'poste', 'localite');

    public function Besoin()
    {
        return $this->belongsTo('App\Donateur');
    }

}