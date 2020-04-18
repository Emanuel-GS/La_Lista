<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_state extends Model
{
    protected $table = 'cat_states';

    protected $fillable =  ['descripcion'];
}
