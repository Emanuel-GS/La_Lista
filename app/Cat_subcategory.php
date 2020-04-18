<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_subcategory extends Model
{
    protected $table = 'cat_subcategories';

    protected $fillable =  ['descripcion', 'tipo_id', 'categoria_id'];
}
