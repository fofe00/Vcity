<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateur;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class UtilisateurController extends Controller
{
    public function login(){
      $titre='login';
      return \view('auth.login',compact('titre'));
    }

    public function tLogin(Request $request){
      //login treatment
        $request->validate([
            'email' => 'required|email',
            'pwd' => 'required',
        ]);
        $conn=auth()->attempt([
            'email' => request('email'),
            'password' => request('pwd'),
        ]);
        if ($conn){
            Flashy::message('You are Welcome.');
            return redirect(route('home'));
        }else{
            Flashy::error('You are not loging');
            return redirect(route('login'));
        }
    }

    public function register(){
      $titre="register";
      return view('auth.register',compact(('titre')));
    }
    public function tRegister(Request $request){
      // register treatment
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'pwd' => 'required|confirmed',
        ]);

        $user=new Utilisateur();
        $user->nom= $request->name;
        $user->prenom="aa";
        $user->tel="12121";
        $user->email=$request->input('email');
        $user->pwd=(bcrypt($request->pwd));
        $user->save();
        $conn=auth()->attempt([
            'email' => request('email'),
            'password' => request('pwd'),
        ]);
        if ($conn){
            Flashy::message('You are Welcome.');
            return redirect(route('home'));
        }else{
            Flashy::error('You are not loging');
            return redirect(route('Ulogin'));
        }
    }

    public function logout()
    {
        Auth::logout();
        Flashy::message('You have been logged out.');
        return redirect(route("login"));
    }

}
