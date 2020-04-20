<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat_contract extends Model
{
    protected $table = 'cat_contracts';

    protected $fillable =  ['descripcion'];
}
