<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    //Creacion de modelo Empleado
    protected $table = "Customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false ;
}
