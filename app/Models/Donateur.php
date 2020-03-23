<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donateur extends Model 
{

    protected $table = 'donateurs';
    public $timestamps = true;
    protected $fillable = array('libelle', 'rc', 'ninea', 'identification', 'cni', 'contact_id', 'user_id');

    public function Contact()
    {
        return $this->hasOne('App\Contact');
    }

    public function Dons()
    {
        return $this->hasMany('App\Don');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}