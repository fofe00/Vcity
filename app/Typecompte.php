<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecompte extends Model
{
    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }
}
