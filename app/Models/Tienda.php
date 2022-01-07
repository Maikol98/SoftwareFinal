<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $table ='tienda';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'nombre',
        'descripcion',
        'horarioFin',
        'horarioInicio',
        'url',
        'dias'
    ];
}
