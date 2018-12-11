<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    //
    protected $table = 'families';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','name'
    ];


    public $timestamps = false;



}
