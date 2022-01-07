<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table ='orden';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'esCarrito',
        'fechapedido',
        'estado',
        'user_id'
    ];
}
