<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\ResetPasswordEmail;

class ResetPasswordController extends Controller
{
    //mostrar el formulario de envio por correo del lin de seguridad
    public function emailForm(){
        return view('auth.recordarCorreo');
    }

    public function submitLink(Request $r){
        //1. Generar codigo aleatorio
            $token= Str::random(64);
            var_dump($token);
        //2. Registrar en la tabla password_resets Email,codigo,fecha
        DB::table('password_resets')->insert([
            "email" => $r->input("email"),
            "token" => $token,
            "created_at" => Carbon::now()
            ]);
        //3. Enviar el email al destino, con el codigo de seguridad generado
            Mail::to($r->input("email"))->send(new ResetPasswordEmail($token));
    }

    public function resetForm($token){
        return view('auth.reset-password')->with('token', $token);
    }

    public function resetPassword(Request $r){
        //1. obtener el registro correspondiente al token e email ingresados en la tabla password-resets
        $pass_reset = DB::table('password_resets')->where(['email' => $r->input('email'),
                                                          'token' => $r->input('token')])->first();

        if ($pass_reset == null) {
            die("Token Invalido");
        }

        //2. de estar el registro, proceder a actualizar el password al usuario correspondiante a ese email
        $user = User::where('email', $r->input('email'))->first();
        $user->password = Hash::make($r->input('password'));
        $user->save();

        echo  "Reseteo de password exitoso!!!";
        //3. eliminar el registro del yoken
    }
}






