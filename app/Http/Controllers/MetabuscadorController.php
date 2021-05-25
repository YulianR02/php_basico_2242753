<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //Controlador esta compuesto de accciones
    // Cada accion estara vinvulada a su correspondiente ruta

    public function mostrar_formulario(){

        //Mostrar la vista del metabuscador
        return view ('metabuscador');

    }

     public function buscar_termino (){
        //Realizar Busqueda
        $termino = $_POST["termino"];
        
        $motor = $_POST["motores"];

        //La busqueda se realizara acorde al mostrar_formulario de busqueda elegido
        switch($motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;            
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 4: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 5: return redirect()->to("https://es.ask.com/web?q=$termino");
                break;
            case 6: return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 7: return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=0&ie=utf8&query=$termino");
                break;
            case 8: return redirect()->to("https://search.aol.com/aol/search;_ylt=A2KIbMrtCq1gAkEAOVNoCWVH;_ylc=X1MDMTE5NzgwMzg4MARfcgMyBGZyAwRmcjIDc2ItdG9wLXNlYXJjaARncHJpZAMEbl9yc2x0AzAEbl9zdWdnAzAEb3JpZ2luA3NlYXJjaC5hb2wuY29tBHBvcwMwBHBxc3RyAwRwcXN0cmwDMARxc3RybAM0BHF1ZXJ5A3JvcGEEdF9zdG1wAzE2MjE5NTM2NTg-?q=$termino");
                break;
            case 9: return redirect()->to("https://www.wolframalpha.com/input/?i=$termino");
                break;
            case 10: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;    
            
        }

    }
}
