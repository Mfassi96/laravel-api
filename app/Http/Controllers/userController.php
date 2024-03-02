<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

    public function registrar(Request $request){
                
                $usuario= new User();
                $usuario->name=$request->post('nombre');
                $usuario->email=$request->post('correo');
                $usuario->password=bcrypt($request->post('password'));
                $usuario->save(); //guarda el registro en la BD
                return view('welcome');
    }

    public function agregar(){
        return view('registrarUsuario');
    }


}
