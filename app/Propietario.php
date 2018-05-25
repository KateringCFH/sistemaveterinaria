<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table      = 'propietario';
    protected $primaryKey = 'idpropietario';
    public $timestamps    = false;

    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'telf',
        'ci',
        'direccion',
        'rfid',
    ];

    protected $guarded = [

    ];
}
