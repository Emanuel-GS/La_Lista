<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_priority extends Model
{
    protected $table = 'cat_priorities';

    protected $fillable =  ['descripcion'];
}
