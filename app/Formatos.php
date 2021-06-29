<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    //
    protected $table = "mediatype";
    protected $primaryKey = "MediaTypeId";
    public $timestamps = false ;

    public function canciones(){
        return $this->hasMany('App\cancion',
                              'MediaTypeId');
    }
}
