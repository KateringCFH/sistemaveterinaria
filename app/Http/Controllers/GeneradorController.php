<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Barryvdh\DomPDF\Facade as PDF;

class GeneradorController extends Controller
{
    //
    // public function imprimir(){
    //    $pdf = \PDF::loadView('ejemplo');
    //       return $pdf->download('ejemplo.pdf');
    // }


public function imprimir(){
 $today = 12;
 $pdf = \PDF::loadView('ejemplo', compact('today'));
 //return $pdf->download('ejemplo.pdf');
 return $pdf->stream('ejemplo.pdf');
}
}
