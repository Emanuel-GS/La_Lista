<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_workday extends Model
{
    protected $table = 'cat_workdays';

    protected $fillable =  ['descripcion'];
}
