<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    protected $redirectPath = 'cadastro';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /*  public function __construct()
      {
          $this->middleware('auth');
      }
  */
    public function index()
    {
        return view("auth.login");
    }


//    public function getLogin(Request $request){
//        $email = $request->login;
//        $password = $request->senha;
//        if (Auth::attempt(["email" => $email, "password" => $password])) {
////            if (Auth::user()->admin == 1) {
////                return view("admin.home");
////            } else {
//                return view("home");
////            }
//        }
//        else{
//            return back()->withInput();
//        }
//    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|min:10',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function create(array $data)
    {
        return Usuario::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telefone' => $data['telefone'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function postLogin(Request $request)
    {
        $user = Usuario::where('email', $request->login)->first();

        if ( Hash::check($request->senha, $user->password) ) {
            Auth::login($user);
            if (Auth::user()->admin == 1) {
                return view("admin.home");
            } elseif(Auth::user()->admin == 0)  {
                $usuario = ($user->id);
                return redirect("/perfil")->with('usuario', $usuario);;
            }
        } else {
            return redirect('/cadastro');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}