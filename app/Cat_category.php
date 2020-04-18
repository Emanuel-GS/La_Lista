<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_category extends Model
{
    protected $table = 'cat_categories';

    protected $fillable =  ['descripcion', 'tipo_id'];
}
