<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    //
    protected $table = 'adverts';

    protected $fillable =  ['user_id', 'titulo', 'descripcion','tipo_id', 'categoria_id', 'subcategoria_id', 'estado_id', 'municipio_id', 'localidad_id','prioridad_id'  ];
 
}
