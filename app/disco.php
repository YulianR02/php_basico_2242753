<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disco extends Model
{
    // Creacion modelo album
    protected $table = "album";
    protected $primaryKey = "AlbumId";
    public $timestamps = false ;
}
