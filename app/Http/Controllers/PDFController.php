<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;

class PDFController extends Controller
{
    public function getPDF ()
    {

      $pdf=PDF::loadView('historial.reporte_historial.r_historial');
      //para que aparezca en el navegador para descarar
      return $pdf->stream('rhistorial.pdf') ;
      //descarga directamente
      //return $pdf->download('rhistorial.pdf') ;
    }
}
