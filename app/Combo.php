<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    protected $table = 'combos';
    protected $primaryKey = 'code';
    protected $fillable = [
      'code', 'price', 'stock'
    ];


    public $timestamps = false;
}

