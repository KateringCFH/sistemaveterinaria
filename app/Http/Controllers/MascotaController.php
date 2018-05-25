<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\MascotaFormRequest;
use App\Mascota;

class MascotaController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request) {
            $query   = trim($request->get('searchText'));
            $Mascota = DB::table('mascota as m')
                ->join('propietario as p', 'm.idpropietario', '=', 'p.idpropietario')
                ->select('m.idmascota', 'm.nombre', 'm.raza', 'm.especie', 'm.sexo', 'm.descripcion', 'm.fecha_registro', 'p.nombre as pn', 'p.ap_paterno as pp', 'p.ap_materno as pm')
                ->where('m.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('m.raza', 'LIKE', '%' . $query . '%')
                ->orwhere('m.especie', 'LIKE', '%' . $query . '%')
                ->orwhere('m.sexo', 'LIKE', '%' . $query . '%')
                ->orwhere('m.descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('m.idmascota', 'asc')
                ->paginate(8);
            return view('administrador.mascota.index', ["Mascota" => $Mascota, "searchText" => $query]);
        }
    }
    public function create()
    {
        $propietario = DB::table('propietario')
            ->get();
        return view('administrador.mascota.create', ["propietario" => $propietario]);
    }
    public function store(MascotaFormRequest $request)
    {
        $Mascota                 = new Mascota;
        $Mascota->nombre         = $request->get('nombre');
        $Mascota->raza           = $request->get('raza');
        $Mascota->especie        = $request->get('especie');
        $Mascota->sexo           = $request->get('sexo');
        $Mascota->descripcion    = $request->get('descripcion');
        $Mascota->fecha_registro = $request->get('fecha');
        $Mascota->idpropietario  = $request->get('propietario');
        $Mascota->save();

        return Redirect::to('administrador/mascota');
    }
    public function show($id)
    {
        return view("administrador.mascota.show", ["mascota" => Mascota::findOrFail($id)]);
    }
    public function edit($id)
    {
        $mascota = Mascota::findOrfail($id);
        $idp     = DB::table('mascota as m')
            ->join('propietario as p', 'm.idpropietario', '=', 'p.idpropietario')
            ->select('p.idpropietario as idp', 'p.nombre as nombre', 'p.ap_paterno as app', 'p.ap_materno as pm')
            ->where('m.idmascota', '=', $id)
            ->first();
        return view("administrador.mascota.edit", ["mascota" => $mascota, "idp" => $idp]);

    }
    public function update(MascotaFormRequest $request, $id)
    {
        $Mascota                 = Mascota::findOrFail($id);
        $Mascota->nombre         = $request->get('nombre');
        $Mascota->raza           = $request->get('raza');
        $Mascota->especie        = $request->get('especie');
        $Mascota->sexo           = $request->get('sexo');
        $Mascota->descripcion    = $request->get('descripcion');
        $Mascota->fecha_registro = $request->get('fecha');
        $Mascota->idpropietario  = $Mascota->idpropietario;
        $Mascota->update();

        return Redirect::to('administrador/mascota');
    }
    public function destroy($id)
    {
        $mascota = Mascota::findOrfail($id);
        $mascota->delete();
        return Redirect::to('administrador/mascota');
    }
}
