<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleOrden extends Model
{
    protected $table ='detalleorden';
    protected $primaryKey='orden_id';
    public $timestamps=false;

    protected $fillable=[
        'orden_id',
        'producto_id',
        'subtotal',
        'cantidad'
    ];
}
