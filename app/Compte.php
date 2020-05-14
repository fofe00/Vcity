<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{
    public function typecompte()
    {
        return $this->belongsTo('App\Typecompte');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function utilisateur()
    {
        return $this->belongsTo('App\Compte');
    }
}
