<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //
    //Creacion de modelo Cliente
    protected $table = "Customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false ;

    public function compras(){
        return $this->hasMany('App\Compra',
                              'CustomerId');
    }

    
}
