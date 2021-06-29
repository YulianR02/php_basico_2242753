<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //Creacion modelo genero
    protected $table = "genre";
    protected $primaryKey = "GenreId";
    public $timestamps = false ;

    public function canciones(){
        return $this->hasMany('App\cancion',
                              'GenreId');

    }
}
