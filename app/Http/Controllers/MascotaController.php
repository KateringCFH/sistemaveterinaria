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
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request) {
            $query   = trim($request->get('searchText'));
            $Mascota = DB::table('mascota as m')
                ->join('propietario as p', 'm.id_propietario', '=', 'p.id_propietario')
                ->select('m.id_mascota', 'm.nombre', 'm.raza', 'm.especie', 'm.sexo', 'm.descripcion', 'm.fecha_registro', 'p.nombre as pn', 'p.app as pp', 'p.apm as pm')
                ->where('m.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('m.raza', 'LIKE', '%' . $query . '%')
                ->orwhere('m.especie', 'LIKE', '%' . $query . '%')
                ->orwhere('m.sexo', 'LIKE', '%' . $query . '%')
                ->orwhere('m.descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('m.id_mascota', 'asc')
                ->paginate(8);
            return view('mascota.index', ["Mascota" => $Mascota, "searchText" => $query]);
        }
    }
    public function create()
    {
        $propietario = DB::table('propietario')
            ->get();
        return view('mascota.create', ["propietario" => $propietario]);
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
        $Mascota->id_propietario  = $request->get('propietario');
        $Mascota->save();

        return Redirect::to('/mascota');
    }
    public function show($id)
    {
        return view("mascota.show", ["mascota" => Mascota::findOrFail($id)]);
    }
    public function edit($id)
    {
        $mascota = Mascota::findOrfail($id);
        $idp     = DB::table('mascota as m')
            ->join('propietario as p', 'm.id_propietario', '=', 'p.id_propietario')
            ->select('p.id_propietario as idp', 'p.nombre as nombre', 'p.app as app', 'p.apm as pm')
            ->where('m.id_mascota', '=', $id)
            ->first();
        return view("mascota.edit", ["mascota" => $mascota, "idp" => $idp]);

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
        $Mascota->id_propietario  = $Mascota->id_propietario;
        $Mascota->update();

        return Redirect::to('/mascota');
    }
    public function destroy($id)
    {
        $mascota = Mascota::findOrfail($id);
        $mascota->delete();
        return Redirect::to('/mascota');
    }
}
