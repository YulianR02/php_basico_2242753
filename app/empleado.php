<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    //Creacion de modelo Empleado
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false ;
}
