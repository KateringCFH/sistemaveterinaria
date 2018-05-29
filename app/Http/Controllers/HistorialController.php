<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\MascotaFormRequest;
use App\Http\Requests\UsersFormRequest;
use App\Http\Requests\PropietarioFormRequest;
use App\Mascota;
use App\Servicio;
use App\Propietario;
use App\User;
use App\Cita;
use PDF;

class HistorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request) {
            $query     = trim($request->get('searchText'));
            $Historial = DB::table('mascota as m')
                ->join('cita as c', 'm.id_mascota', '=', 'c.id_mascota')
                ->join('users as p', 'c.id', '=', 'p.id')
                ->join('servicio as s', 'c.id_servicio', '=', 's.id_servicio')
                ->join('propietario as pr', 'm.id_propietario', '=', 'pr.id_propietario')
                ->select('c.id_cita as id', 'c.fecha as fecha', 'm.nombre as mn', 'pr.nombre as prn', 'pr.app as prap', 'pr.apm as pram', 'm.especie as e', 'c.observacion as obs', 's.nombre as s', 's.descripcion as des', 'p.name as pn', 'p.app as pap', 'p.apm as pam')
                ->where('p.name', 'LIKE', '%' . $query . '%')
                ->orwhere('p.app', 'LIKE', '%' . $query . '%')
                ->orwhere('p.apm', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.app', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.apm', 'LIKE', '%' . $query . '%')
                ->orwhere('m.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('s.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('c.fecha', 'LIKE', '%' . $query . '%')
                ->orwhere('s.descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('c.fecha', 'asc')
                ->paginate(8);
            return view('historial.index', ["Historial" => $Historial, "searchText" => $query]);
        }
    }
    public function create()
    {
        $propietario = DB::table('propietario')
            ->get();
        return view('historial.create', ["propietario" => $propietario]);
    }
    public function store()
    {

    }
    public function show()
    {

    }
    public function citas(Request $request)
    {
        if ($request) {
            $query     = trim($request->get('searchText'));
            $Historial = DB::table('mascota as m')
                ->join('cita as c', 'm.id_mascota', '=', 'c.id_mascota')
                ->join('users as p', 'c.id', '=', 'p.id')
                ->join('servicio as s', 'c.id_servicio', '=', 's.id_servicio')
                ->join('propietario as pr', 'm.id_propietario', '=', 'pr.id_propietario')
                ->select('c.id_cita as id', 'c.fecha as fecha', 'm.nombre as mn', 'pr.nombre as prn', 'pr.app as prap', 'pr.apm as pram', 'm.especie as e', 'c.observacion as obs', 's.nombre as s', 's.descripcion as des', 'p.name as pn', 'p.app as pap', 'p.apm as pam', 'pr.rfid as rfid')
                ->where('p.name', 'LIKE', '%' . $query . '%')
                ->orwhere('p.app', 'LIKE', '%' . $query . '%')
                ->orwhere('p.apm', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.app', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.apm', 'LIKE', '%' . $query . '%')
                ->orwhere('m.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('pr.rfid', 'LIKE', '%' . $query . '%')
                ->orwhere('c.fecha', 'LIKE', '%' . $query . '%')
                ->orwhere('s.descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('c.fecha', 'asc')
                ->paginate(8);
            return view('historial.rcitas', ["Historial" => $Historial, "searchText" => $query]);
        }
    }
    public function rh(Request $request)
    {
        if ($request) {
            $query     = trim($request->get('searchText'));
            $Historial = DB::table('mascota as m')
                ->join('propietario as p', 'm.id_propietario', '=', 'p.id_propietario')
                ->select('m.id_mascota as id', 'm.nombre as mn', 'p.nombre as prn', 'p.app as prap', 'p.apm as pram')
                ->where('m.nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('p.nombre', 'LIKE', '%'.$query.'%')
                ->orderBy('m.id_mascota', 'asc')
                ->paginate(8);
            return view('historial.reporte_historial.r_h', ["Historial" => $Historial, "searchText" => $query]);
        }
    }
    public function reporte($id)
    {
      $mascota = Mascota::findOrfail($id);
      $propietario  =  DB::table('mascota as m')
          ->join('propietario as p', 'm.id_propietario', '=', 'p.id_propietario')
          ->select('p.id_propietario as idp', 'p.nombre as nombre', 'p.app as app', 'p.apm as apm', 'p.direccion as direccion', 'p.telefono as telefono')
          ->where('m.id_mascota', '=', $id)
          ->first();
        $citas = DB::table('mascota as m')
            ->join('cita as c', 'm.id_mascota', '=', 'c.id_mascota')
            ->join('servicio as s', 'c.id_servicio', '=', 's.id_servicio')
            ->select('c.fecha as fecha',  'm.especie as especie',
                      'c.observacion as observacion', 's.nombre as servicio',
                      'c.edad as edad', 'c.peso as peso', 'c.producto as producto')
            ->where('c.id_mascota', '=', $id)
            ->get()->toArray();

        return view('historial.reporte_historial.r_historial', ["m"=>$mascota, 'p'=>$propietario, 'd'=>$citas]);

    }
}
