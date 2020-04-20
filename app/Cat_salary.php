<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_salary extends Model
{
    protected $table = 'cat_salaries';

    protected $fillable =  ['descripcion'];
}
