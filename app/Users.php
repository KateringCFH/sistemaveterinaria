<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
      'name',
      'app',
      'apm',
      'email',
      'password',
      'cargo',
      'ci',
      'telefono',
      'direccion',
    ];

    protected $guarded = [

    ];
}
