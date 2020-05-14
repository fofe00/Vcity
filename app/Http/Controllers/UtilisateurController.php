<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function login(){
      return \view('auth.login');
    }

    public function tLogin(){
      //login treatment
    }

    public function register(){
      return view('auth.register');
    }
    public function tRegister(){
      // register treatment
    }
}
