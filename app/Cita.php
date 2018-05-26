<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table      = 'cita';
    protected $primaryKey = 'id_cita';
    public $timestamps    = false;

    protected $fillable = [
        'fecha',
        'producto',
        'observacion',
        'estado',
        'prox_cita',
        'peso',
        'edad',
        'id',
        'id_servicio',
        'id_mascota',
    ];

    protected $guarded = [

    ];
}
