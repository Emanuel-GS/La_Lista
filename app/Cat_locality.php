<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_locality extends Model
{
    protected $table = 'cat_localities';

    protected $fillable =  ['descripcion','estado_id','municipio_id'];
}
