<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $table      = 'propietario';
    protected $primaryKey = 'id_propietario';
    public $timestamps    = false;

    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'ci',
        'telefono',
        'direccion',
        'rfid',
    ];

    protected $guarded = [

    ];
}
