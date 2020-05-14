<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function transactiontype()
    {
        return $this->belongsTo('App\transactiontype');
    }

    public function compte()
    {
        return $this->belongsTo('App\Compte');
    }
}
