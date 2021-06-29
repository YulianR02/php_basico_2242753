<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayList extends Model
{
    //Creacion modelo PlayList
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;


    //Relacion M:M entre lista de reproduccion y canciones
    public function canciones(){
        //BelongToMany(Muchos a Muchos con pivote):
        //1.Modelo a relacionar
        //2.La tabla pivote
        //3.Fk del modelo actual en el pivote
        //4.fl del modelo a relacipnar en el pivote
        return $this->belongsToMany('App\cancion',
                            'playlisttrack',
                            'PlaylistId',
                            'TrackId');
    }
}
