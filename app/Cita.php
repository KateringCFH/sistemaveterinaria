<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table      = 'cita';
    protected $primaryKey = 'idcita';
    public $timestamps    = false;

    protected $fillable = [
        'fecha',
        'hora',
        'producto',
        'observacion',
        'estado',
        'prox_cita',
        'peso',
        'edad',
        'idpersonal',
        'idmascota',
        'idservicio',
    ];

    protected $guarded = [

    ];
}
