<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cancion extends Model
{
    //Creacion modelo cancion
    protected $table = "track";
    protected $primaryKey = "TrackId";
    public $timestamps = false;
}
