<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use App\Http\Requests\UsersFormRequest;
use App\User;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request) {
            $query    = trim($request->get('searchText'));
            $Personal = DB::table('users')
                ->select('id', 'name', 'app', 'apm', 'ci', 'telefono', 'direccion', 'cargo')
                ->where('name', 'LIKE', '%' . $query . '%')
                ->orwhere('app', 'LIKE', '%' . $query . '%')
                ->orwhere('apm', 'LIKE', '%' . $query . '%')
                ->orwhere('ci', 'LIKE', '%' . $query . '%')
                ->orwhere('telefono', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->paginate(8);
            return view('personal.index', ["Personal" => $Personal, "searchText" => $query]);
        }
    }

    public function create()
    {
        return view("personal.create");
    }

    public function store(UsersFormRequest $request)
    {
        $Users            = new User;
        $Users->name      = $request->get('name');
        $Users->app       = $request->get('app');
        $Users->apm       = $request->get('apm');
        $Users->ci        = $request->get('ci');
        $Users->telefono  = $request->get('telefono');
        $Users->direccion = $request->get('direccion');
        $Users->email     = $request->get('email') ;
        $Users->password  = bcrypt($request->get('password'));
        $Users->cargo     = $request->get('cargo') ;
        $Users->save();

        return Redirect::to('/personal');
    }

    public function show($id)
    {
        return view("personal.show", ["personal" => Personal::findOrFail($id)]);
    }

    public function edit($id)
    {
        $personal = User::findOrfail($id);
        return view("personal.edit", ["personal" => $personal]);
    }
    public function destroy($id)
    {
        $personal = User::findOrfail($id);
        $personal->delete();
        return Redirect::to('/personal');
    }
}
