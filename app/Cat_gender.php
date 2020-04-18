<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_gender extends Model
{
    protected $table = 'cat_genders';

    protected $fillable =  ['descripcion'];
}
