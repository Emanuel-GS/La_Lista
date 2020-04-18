<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_town extends Model
{
    protected $table = 'cat_towns';

    protected $fillable =  ['descripcion','estado_id'];
}
