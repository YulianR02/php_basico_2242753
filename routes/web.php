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
Route::get("paises", function () {
    $paises = [
        //Areglo de dos dimenciones
          "Colombia" => [
              "capital" => "Bogota.",
              "moneda" => "Pesos Colombianos",
              "poblacion" => "51 M"

          ],
          "Peru"=> [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => "33 M"
          ],
          "Paraguay" => [
            "capital" => "Asuncion",
            "moneda" => "Guaraní paraguayo",
            "poblacion" => "7 M"

          ],
          "Brasil" =>[
            "capital" => "Brasilia",
            "moneda" => "Real Brasileño",
            "poblacion" => "211 M",

          ],
    ];

    //Mostrar la vista de paises
    //Llevando el arreglo de paises
    return view("paises")->with("naciones", $paises);
});

Route::get('mostrar_formulario', 'MetabuscadorController@mostrar_formulario'  );

Route::post('buscar_termino', "MetabuscadorController@buscar_termino");

Route::resource('artistas', "ArtistaController");
