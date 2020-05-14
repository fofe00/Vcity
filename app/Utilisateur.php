<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }
}
