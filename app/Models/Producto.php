<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table ='producto';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'img',
        'categoria_id',
        'tienda_id'
    ];
}
