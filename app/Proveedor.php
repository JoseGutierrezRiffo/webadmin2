<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'providers';
    protected  $primaryKey = 'id';
    protected  $fillable = [
      'id', 'name'
    ];

    public $timestamps = false;
}

