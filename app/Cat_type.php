<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_type extends Model
{
    protected $table = 'cat_types';

    protected $fillable =  ['descripcion'];
}
