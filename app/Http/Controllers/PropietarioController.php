<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\PropietarioRequest;
use App\Propietario;

class PropietarioController extends Controller
{
	//Primera vista en pantalla al ingresar al menu de propietario
     public function index(Request $request)
    {
        if ($request) {
            $query    = trim($request->get('searchText'));
            $propietario = DB::table('propietario')

                ->select('idpropietario', 'nombre', 'ap_paterno', 'ap_materno','telf', 'ci',  'direccion', 'rfid')
                ->where('nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('ap_paterno', 'LIKE', '%' . $query . '%')
                ->orwhere('ap_materno', 'LIKE', '%' . $query . '%')
                ->orwhere('ci', 'LIKE', '%' . $query . '%')
                ->orwhere('telf', 'LIKE', '%' . $query . '%')
                ->orderBy('idpropietario', 'asc')
                ->paginate(8);
            return view('administrador.propietario.index', ["Propietario" => $propietario, "searchText" => $query]);
        }
    }
    public function create()
    {
        return view("administrador.propietario.create");
    }
    //Registra los datos ingresados
     public function store(PropietarioRequest $request)
    {
        $Propietario             = new Propietario;
        $Propietario ->nombre     = $request->get('nombre');
        $Propietario ->ap_paterno = $request->get('ap_paterno');
        $Propietario ->ap_materno = $request->get('ap_materno');
        $Propietario ->telf       = $request->get('telf');
        $Propietario ->ci         = $request->get('ci');
        $Propietario ->direccion  = $request->get('direccion');
        $Propietario ->rfid  = $request->get('rfid');
        $Propietario ->save();

        return Redirect::to('administrador/propietario');
    }
//Mostrar datos del propietario
    public function show($id)
    {
        return view("administrador.propietario.show", ["propietario" => propietario::findOrFail($id)]);
    }
    //editar datos del propietario
     public function edit($id)
    {
        return view("administrador.propietario.edit", ["propietario" => Propietario::findOrfail($id)]);
    }
//Actualiza los datos del propietario
    public function update(PropietarioRequest $request, $id)
    {
        $propietario             = Propietario::findOrFail($id);
        $propietario->nombre     = $request->get('nombre');
        $propietario->ap_paterno = $request->get('ap_paterno');
        $propietario->ci         = $request->get('ci');
        $propietario->ap_materno = $request->get('ap_materno');
        $propietario->telf       = $request->get('telf');
        $propietario->direccion  = $request->get('direccion');
        $propietario->rfid = $request->get('rfid');
        $propietario->update();

        return Redirect::to('administrador/propietario');
    }
     public function destroy($id)
    {
        $propietario = Propietario::findOrfail($id);
        $propietario->delete();
        return Redirect::to('administrador/propietario');
    }
}
