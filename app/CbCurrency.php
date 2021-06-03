<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CbCurrency extends Model
{
    //Nombre Tabla
    protected $table = 'cb_currency';

    //Llave primaria
    protected $primaryKey = 'idcurrency';

    //Campos de la tabla definidos en $fillable
    protected $fillable = array('currency', 'description', 'isactive', 'isocode', 'cursymbol', 'precisionstd',  'precisioncost', 'precisionprize');

    //Indicamos los campos que no queremos que nos devuelvan en las consultas
    protected $hidden = ['created_at', 'updated_at'];   //variables que el ORM Eloquent añade por defecto
}
