<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{

    //Creacion de modelo compra
    protected $table = "invoice";
    protected $primaryKey = "InvoiceId";
    public $timestamps = false ;
    
}
