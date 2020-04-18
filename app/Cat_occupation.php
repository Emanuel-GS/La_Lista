<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_occupation extends Model
{
    protected $table = 'cat_occupations';

    protected $fillable =  ['descripcion'];
}
