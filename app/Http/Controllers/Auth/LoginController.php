<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Mostrar Form

    

    public function form(){
        return view('auth.login');
    }

    //logear
    public function login(Request $request){
        //Auth:Establecer Inicios de sesion
        if (Auth::attempt($request->only(['email','password']))) {
            return redirect('users')->with("login","Bienvenido");
        }else{
            return redirect('login')->with("loginFail", "Credenciales no validas!!!");
        }

    }

    //cerrar sesion

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
