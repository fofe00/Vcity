<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
    use BasicAuthenticatable;
    protected $fillable = ['email', 'pwd'];

    public function getAuthPassword()
    {
        return $this->pwd;
    }
    /*public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }*/
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }

    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }
}
