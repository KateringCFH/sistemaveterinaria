<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            $query     = trim($request->get('searchText'));
            $Historial = DB::table('mascota as m')
                ->join('cita as c', 'm.idmascota', '=', 'c.idmascota')
                ->join('personal as p', 'c.idpersonal', '=', 'p.idpersonal')
                ->join('servicio as s', 'c.idservicio', '=', 's.idservicio')
                ->join('propietario as pr', 'm.idpropietario', '=', 'pr.idpropietario')
                ->select('c.idcita as id', 'c.fecha as fecha', 'm.nombre as mn', 'pr.nombre as prn', 'pr.ap_paterno as prap', 'pr.ap_materno as pram', 'm.especie as e', 'c.observacion as obs', 's.nombre as s', 's.descripcion as des', 'p.nombre as pn', 'p.ap_paterno as pap', 'p.ap_materno as pam')
                ->where('p.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('p.ap_paterno', 'LIKE', '%' . $query . '%')
                ->orwhere('p.ap_materno', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.ap_paterno', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.ap_materno', 'LIKE', '%' . $query . '%')
                ->orwhere('m.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('s.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('c.fecha', 'LIKE', '%' . $query . '%')
                ->orwhere('s.descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('c.fecha', 'asc')
                ->paginate(8);
            return view('administrador.historial.index', ["Historial" => $Historial, "searchText" => $query]);
        }
    }
    public function create()
    {
        $propietario = DB::table('propietario')
            ->get();
        return view('administrador.historial.create', ["propietario" => $propietario]);
    }
    public function store()
    {

    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
