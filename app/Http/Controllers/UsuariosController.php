<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class UsuariosController extends Controller
{

    public function index()
    {
        $usuarios = \App\Usuario::all();

        return view('Admin.users')->with('usuarios', $usuarios);
    }

    private $user;

    public function __construct(Usuario $user){

        $this->user = $user;

    }

    public function indexadmin(){

        $users = $this->user->paginate(10);
        $users->setPath('');
        return view('Admin.users')->with('users', $users);

    }

    public function create()
    {

        return view('cadastro');
    }

    public function store(Requests\CreateUsuariosRequest $request)
    {

        Usuario::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
            'password' => bcrypt($request['password']),
        ]);

        echo "<script>alert('Seu cadastro foi realizado com sucesso.')</script>";

        return redirect('/');

    }

    public function show()
    {

        return view('perfil');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        \App\Usuario::destroy($id);

       return redirect()->back();
    }

    public function profile($id){
        $usuarios = \App\Usuario::findOrFail($id);
        return view('perfil')->with('usuarios', $usuarios);
    }

}
