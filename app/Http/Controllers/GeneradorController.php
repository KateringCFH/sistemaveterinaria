<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mascota;
use DB;

use Barryvdh\DomPDF\Facade as PDF;

class GeneradorController extends Controller
{
  public function imprimir($id){
   $today = 12;
   $m = Mascota::findOrfail($id);
   $p  =  DB::table('mascota as m')
       ->join('propietario as p', 'm.id_propietario', '=', 'p.id_propietario')
       ->select('p.id_propietario as idp', 'p.nombre as nombre', 'p.app as app', 'p.apm as apm', 'p.direccion as direccion', 'p.telefono as telefono')
       ->where('m.id_mascota', '=', $id)
       ->first();
     $d = DB::table('mascota as m')
         ->join('cita as c', 'm.id_mascota', '=', 'c.id_mascota')
         ->join('servicio as s', 'c.id_servicio', '=', 's.id_servicio')
         ->select('c.fecha as fecha',  'm.especie as especie',
                   'c.observacion as observacion', 's.nombre as servicio',
                   'c.edad as edad', 'c.peso as peso', 'c.producto as producto')
         ->where('c.id_mascota', '=', $id)
         ->get()->toArray();
   $pdf = \PDF::loadView('reportehistorial', compact('m', 'p', 'd', 'today'));
   //return $pdf->download('ejemplo.pdf');
   return $pdf->stream('ejemplo.pdf');
  }
}
