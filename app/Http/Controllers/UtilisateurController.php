<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function login(){
      return \view('auth.login');
    }

    public function tLogin(Request $request){
      //login treatment
        $request->validate([
            'email' => 'required|email',
            'pwd' => 'required',
        ]);
        dd("ainix");
    }

    public function register(){
      return view('auth.register');
    }
    public function tRegister(Request $request){
      // register treatment
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'pwd' => 'required|confirmed',
        ]);
        dd($request);
    }
}
