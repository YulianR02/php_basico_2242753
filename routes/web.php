<?php

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
//
Route::get ("variables" , function(){
      $mensaje = 20;
      //Tipo Dato
      var_dump($mensaje);
      echo "<hr/>";
      $mensaje = "Hola 2242753";
      var_dump($mensaje);
} );

Route::get("Arreglos", function(){
      //Definir un arreglo PHP
      //Tamaño: numero de elementos del arreglo

      $estudiantes = ["An"=>"Ana",
                       2=>"Maria",
                      "Jo"=>"Jorge"];
      echo "<pre>";
      var_dump($estudiantes);
      echo "</pre>";

});

