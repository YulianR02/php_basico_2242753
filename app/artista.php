<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artista extends Model
{
    //Creacion modelo artista
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //Establecer relacion de 1 Artista - M Discos
    public function discos(){
        //HasMany
        //1. Modelo a relacionar
        //2. FK del artista(PAPA) en los discos(Hijo)
        return $this->hasMany('App\disco', 'ArtistId');
    }
    //Establecer relacion 1 Artista -M canciones
    public function canciones(){
        //hasManyThrough Establecer relacion 1 - m entre 3 tablas
        //Parametro 1 Modelo Destino
        // Parametro 2 modelo intermedio
        //Parametro 3 FK del modelo 1 en el modelo 2
        //Paremetro 4 FK del modelo 2 en el modelo 3
        //Paremetro 5 pk del modelo 1
        //Paremetro 6 Pk modelo 2
        return $this->hasManyThrough('App\cancion',
                                      'App\disco',
                                      'ArtistId',
                                      'AlbumId',
                                      'ArtistId',
                                      'AlbumId');
    }
}
