<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donateur extends Model 
{

    protected $table = 'donateurs';
    public $timestamps = true;
    protected $fillable = array('libelle', 'rc', 'ninea', 'type_identification', 'numero_piece', 'contact_id', 'user_id', 'besoin_id');

    public function Contact()
    {
        return $this->hasOne('App\Models\Contact');
    }

    public function Dons()
    {
        return $this->hasMany('App\Models\Don');
    }

   /*  public function Besoin()
    {
        return $this->belongsTo('App\Models\Besoin');
    } */

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}