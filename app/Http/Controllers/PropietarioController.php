<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\PropietarioFormRequest;
use App\Propietario;

class PropietarioController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  //Primera vista en pantalla al ingresar al menu de propietario
     public function index(Request $request)
    {
        if ($request) {
            $query    = trim($request->get('searchText'));
            $propietario = DB::table('propietario')

                ->select('id_propietario', 'nombre', 'app', 'apm','telefono', 'ci',  'direccion', 'rfid')
                ->where('nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('app', 'LIKE', '%' . $query . '%')
                ->orwhere('apm', 'LIKE', '%' . $query . '%')
                ->orwhere('ci', 'LIKE', '%' . $query . '%')
                ->orwhere('telefono', 'LIKE', '%' . $query . '%')
                ->orwhere('rfid', 'LIKE', '%' . $query . '%')
                ->orderBy('id_propietario', 'asc')
                ->paginate(8);
            return view('propietario.index', ["Propietario" => $propietario, "searchText" => $query]);
        }
    }
    public function create()
    {
        return view("propietario.create");
    }
    //Registra los datos ingresados
     public function store(PropietarioFormRequest $request)
    {
        $Propietario             = new Propietario;
        $Propietario ->nombre     = $request->get('nombre');
        $Propietario ->app = $request->get('app');
        $Propietario ->apm = $request->get('apm');
        $Propietario ->telefono       = $request->get('telefono');
        $Propietario ->ci         = $request->get('ci');
        $Propietario ->direccion  = $request->get('direccion');
        $Propietario ->rfid  = $request->get('rfid');
        $Propietario ->save();

        return Redirect::to('/propietario');
    }
//Mostrar datos del propietario
    public function show($id)
    {
        return view("propietario.show", ["propietario" => propietario::findOrFail($id)]);
    }
    //editar datos del propietario
     public function edit($id)
    {
        return view("propietario.edit", ["propietario" => Propietario::findOrfail($id)]);
    }
//Actualiza los datos del propietario
    public function update(PropietarioFormRequest $request, $id)
    {
        $propietario             = Propietario::findOrFail($id);
        $propietario->nombre     = $request->get('nombre');
        $propietario->app = $request->get('app');
        $propietario->ci         = $request->get('ci');
        $propietario->apm = $request->get('apm');
        $propietario->telefono       = $request->get('telefono');
        $propietario->direccion  = $request->get('direccion');
        $propietario->rfid = $request->get('rfid');
        $propietario->update();

        return Redirect::to('/propietario');
    }
     public function destroy($id)
    {
        $propietario = Propietario::findOrfail($id);
        $propietario->delete();
        return Redirect::to('/propietario');
    }
}
