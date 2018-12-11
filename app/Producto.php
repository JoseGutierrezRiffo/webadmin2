<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey = 'code';

    public $incrementing = false;

    protected $fillable = [
        'code', 'name', 'description', 'price', 'stock', 'stock_treshold', 'family_id', 'provider_id', 'purchase_quantity'
    ];


    public function Familia() {
        return $this->hasMany(Familia::class, 'family_id', 'code');
    }

/*    public function Proveedor() {
        return $this->hasMany(Proveedor::class, 'provider_id', 'code');
    }*/


    public $timestamps = false;


}