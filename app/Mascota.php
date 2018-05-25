<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table      = 'mascota';
    protected $primaryKey = 'idmascota';
    public $timestamps    = false;

    protected $fillable = [
        'nombre',
        'raza',
        'especie',
        'sexo',
        'descripcion',
        'fecha_registro',
        'idpropietario',
    ];

    protected $guarded = [

    ];
}
