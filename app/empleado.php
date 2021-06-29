<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    //Creacion de modelo Empleado
    protected $table = "employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false ;

    //1 - M a Compras
    public function compras(){

        return $this->hasManyThrough('App\Compra',
                                     'App\cliente',
                                     'SupportRepId',
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId');

    }
}
