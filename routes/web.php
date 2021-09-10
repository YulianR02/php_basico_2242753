<?php

use App\Mail\TestMail;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mostrar_formulario', 'MetabuscadorController@mostrar_formulario'  );

Route::post('buscar_termino', "MetabuscadorController@buscar_termino");

Route::resource('artistas', "ArtistaController");

Route::resource('clientes', "ClienteController")->names('clientes');

Route::get('clientes/{cliente}/habilitar', 'ClienteController@habilitar');

Route::resource('empleados', "EmpleadoController")->names('empleados');

Route::resource('users', 'UserController')->middleware('miautenticacion');

//AUTH

Route::get('login','Auth\LoginController@form');

Route::post('login','Auth\LoginController@login');

Route::get('logout','Auth\LoginController@logout');


//MAIL
Route::get('prueba-email', function () {

    $detalles=["Enviado por"=>"Deivy Ruiz"];
    Mail::to('dyruiz603@misena.edu.co')->send( new TestMail($detalles));
    die('Correo enviado');
});

//Reset Password
Route::get('recuperar-password',"Auth\ResetPasswordController@emailForm");
Route::post('enviar-link',"Auth\ResetPasswordController@submitLink");
Route::get('reset-password/{token}',"Auth\ResetPasswordController@resetForm");
Route::post('reset-password',"Auth\ResetPasswordController@resetPassword");