<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_unit extends Model
{
    protected $table = 'cat_units';

    protected $fillable =  ['descripcion'];
}
